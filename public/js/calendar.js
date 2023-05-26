"use strict";

function createDummyData() {
  var date = new Date();
  var data = {};

  for (var i = 0; i < 10; i++) {
    data[date.getFullYear() + i] = {};

    for (var j = 0; j < 12; j++) {
      data[date.getFullYear() + i][j + 1] = {};

      for (var k = 0; k < Math.ceil(Math.random() * 10); k++) {
        var l = Math.ceil(Math.random() * 28);

        try {
          data[date.getFullYear() + i][j + 1][l].push({
            startTime: "10:00",
            endTime: "12:00",
            text: "Servicio agendado",
          });
        } catch (e) {
          data[date.getFullYear() + i][j + 1][l] = [];
          data[date.getFullYear() + i][j + 1][l].push({
            startTime: "10:00",
            endTime: "12:00",
            text: "Servicio agendado",
          });
        }
      }
    }
  }

  return data;
}

var data = createDummyData();

var calendar = new Calendar(
  "calendarContainer",
  "small",
  ["Wednesday",3 ],
  ["#f195b2", "#e83e8c", "#ffffff", "#000000"],
  {
    indicator: true,
    indicator_type: 1,
    indicator_pos: "top"
  }
);

var organizer = new Organizer(
  "organizerContainer",
  calendar,
  data 
);
