@extends('student.student-subject-layout')
@section('contents')
<section id="home">
            <ul id="menu">
                <li class="unactive"><a href="class-stream">Class Stream</a></li>
                <li class="unactive"><a href="class-list">Class List</a><li>
                <li class="unactive"><a href="class-work">Class Work</a></li>
                <li class="active"><a href="scores">Scores</a></li>

            </ul>
</section>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Students</th>
      <th scope="col">Quiz</th>
      <th scope="col">Activity</th>
      <th scope="col">Seatwork</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>100</td>
      <td>100</td>
      <td>90</td>
    </tr>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row"><img class="click" src="/storage/1.png"></th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
    </div>
    @endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
crossorigin="anonymous"></script>
</layout>
</html>