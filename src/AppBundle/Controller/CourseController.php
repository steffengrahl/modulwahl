<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use AppBundle\Steffen\Courses;
use AppBundle\Steffen\Semester;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function showCourseSelector(Request $request): Response
    {
        $courses = new Courses();
        $selected_courses = $request->request->get('course');

        if (empty($selected_courses)) {
            $selected_courses = ['0'];
        }

        $semester = new Semester();
        $page_subtitle = 'Sommersemester \'' . $semester->getYear();

        if ($semester->getCurrent() === 'ws') {
            $page_subtitle = sprintf(
                'Wintersemester %s/%s',
                $semester->getYear(),
                ($semester->getYear() + 1)
            );
        }

        return $this->render(
            'course/form.html.twig',
            [
                'page_subtitle' => $page_subtitle,
                'courses' => $courses->fetch($selected_courses, $semester->getCurrent()),
            ]
        );
    }
}
