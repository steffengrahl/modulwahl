<?php
/**
 * Created by PhpStorm.
 * User: w01e6742rahl
 * Date: 09.08.17
 * Time: 20:40
 */

namespace AppBundle\Controller;

use AppBundle\Steffen\Courses;
use AppBundle\Steffen\Semester;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CourseController extends Controller
{
    /**
     * @Route("/")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCourseSelector(Request $request)
    {
        // $courses = $this->get('app.courses')->fetch($request->request->get('course'));
        $courses = new Courses();
        $selected_courses = $request->request->get('course');
        if (empty($selected_courses))
        {
            $selected_courses = array('0');
        }

        $semester = new Semester();
        $page_subtitle = 'Sommersemester \'' . $semester->getYear();

        if ($semester->getCurrent() === 'ws')
        {
            $page_subtitle = 'Wintersemester \'' . $semester->getYear() . '/' . ($semester->getYear() + 1);
        }

        return $this->render('course/form.html.twig', [
            'page_subtitle' => $page_subtitle,
            'courses' => $courses->fetch($selected_courses, $semester->getCurrent())
        ]);
    }
}
