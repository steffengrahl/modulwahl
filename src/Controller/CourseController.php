<?php

declare(strict_types=1);

namespace App\Controller;

use App\Steffen\Courses;
use App\Steffen\Semester;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends AbstractController
{
    #[Route('/', name: 'course_index', methods: ['GET', 'POST'])]
    public function showCourseSelector(Request $request): Response
    {
        $semester = new Semester();
        $page_subtitle = 'Sommersemester ' . $semester->getYear();
        $courses = (new Courses())->fetch([], $semester->getCurrent());
        $choices = [];

        foreach ($courses as $course)
        {
            $choices[$course['name']] = $course['id'];
        }

        $form = $this->createFormBuilder(null, ['method' => 'POST'])
            ->add('course', ChoiceType::class, [
                'choices' => $choices,
                'choice_label' => function ($choice, string $key, $value) use ($courses) {
                    $semester = array_column($courses, 'semester', 'id')[$choice];

                    return <<<HTML
                        <span class="course-name">{$key}</span>
                        <span class="course-semester">{$semester}</span>
                        HTML;

                },
                'choice_attr' => function ($choice, $key, $value) use ($courses) {
                    if (!array_column($courses, 'wpf', 'id')[$choice]) {
                        return ['class' => 'course-wpf'];
                    }

                    return [];
                },
                'label_html' => true,
                'expanded' => true,
                'multiple' => true,
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $selectedCourses = $form->get('course')->getData() ?? [];
            $courses = (new Courses())->fetch($selectedCourses, $semester->getCurrent());
            $choices = [];

            foreach ($courses as $course)
            {
                $choices[$course['name']] = $course['id'];
            }

            $form = $this->createFormBuilder($selectedCourses, ['method' => 'POST'])
                ->add('course', ChoiceType::class, [
                    'choices' => $choices,
                    'choice_label' => function ($choice, string $key, $value) use ($courses) {
                        $semester = array_column($courses, 'semester', 'id')[$choice];

                        return <<<HTML
                        <span class="course-name">{$key}</span>
                        <span class="course-semester">{$semester}</span>
                        HTML;

                    },
                    'choice_attr' => function ($choice, $key, $value) use ($courses) {
                        if (!array_column($courses, 'wpf', 'id')[$choice]) {
                            return ['class' => 'course-wpf'];
                        }

                        return [];
                    },
                    'label_html' => true,
                    'expanded' => true,
                    'multiple' => true,
                    'data' => $selectedCourses,
                ])
                ->getForm();

            return $this->render('course/form.html.twig', [
                'form' => $form->createView(),
                'page_subtitle' => $page_subtitle,
            ]);
        }

        return $this->render('course/form.html.twig', [
            'form' => $form->createView(),
            'page_subtitle' => $page_subtitle,
        ]);
    }
}
