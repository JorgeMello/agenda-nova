<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Calendário</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendário</title>
  <link rel='stylesheet' href='style.css' />
  <link href="bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">



  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {

        themeSystem: 'bootstrap5',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'pt-br',
        initialDate: '2024-07-10',
        events: 'listar_eventos.php',
      });
      calendar.render();
    });
  </script>
</head>

<body>
  <div id='calendar'></div>



  <script src='fullcalendar-6.1.15/dist/index.global.min.js'></script>
  <script src='fullcalendar-6.1.15/packages/bootstrap5/index.global.min.js'></script>
  <script src='fullcalendar-6.1.15/packages/core/locales/pt-br.global.min.js'></script>

  <script src='bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='bootstrap-5.3.3/dist/js/bootstrap.min.js'></script>


</body>

</html>