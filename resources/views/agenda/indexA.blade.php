@extends('layouts.admin')
@section('title','Agenda')
@section ('content')
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰</button>
      <h1 class="text-calender">
          Calendario de citas agendadas
      </h1>
      <div class="box-calendar ">
          
          <!--Calendar Start-->
          <div id="calendarContainer"></div>
          <div id="organizerContainer"></div>
      </div>
    </div>
@endsection

