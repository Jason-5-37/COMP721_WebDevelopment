import { Component, OnInit } from '@angular/core';
import { Course } from './Course';
import { COURSES } from '../test-course';

@Component({
  selector: 'app-courses',
  templateUrl: './courses.component.html',
  styleUrls: ['./courses.component.css'],
})
export class CoursesComponent implements OnInit {
  course: Course = {
    course_id: 123,
    course_title: 'web development',
    semester: 'one',
    period: 'Wednesday 4-6pm',
    lecturer: 'Jason',
  };

  courses = COURSES;

  selectedCourse: Course;

  onSelect(course: Course): void {
    this.selectedCourse = course;
  }

  constructor() {}

  ngOnInit() {}
}
