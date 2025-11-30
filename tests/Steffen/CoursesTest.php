<?php

namespace App\Tests\Steffen;

use App\Steffen\Courses;
use PHPUnit\Framework\TestCase;

class CoursesTest extends TestCase
{
    public function testFetchFiltersAndFormatsCoursesCorrectly(): void
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Foo',
                'compulsory' => true,
                'conditions' => [3],
                'ws' => true,
                'ss' => true,
            ],
            [
                'id' => 2,
                'name' => 'Bar',
                'compulsory' => true,
                'conditions' => [1,3],
                'ws' => true,
                'ss' => true,
            ],
            [
                'id' => 3,
                'name' => 'Baz',
                'compulsory' => false,
                'conditions' => [0],
                'ws' => true,
                'ss' => true,
            ],
        ];
        $selectedCourses = [0];
        $semester = 'ws';

        $expected = [
            [
                'id' => 3,
                'name' => 'Baz',
                'wpf' => false,
                'semester' => 'SS/WS',
                'assignable' => true,
            ]
        ];

        $service = new Courses($courses);
        $actual = $service->fetch($selectedCourses, $semester);

        $this->assertCount(1, $actual);
        $this->assertEquals($expected, $actual);
    }
}
