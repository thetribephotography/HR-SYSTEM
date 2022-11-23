import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap';


var xValues = ["Active", "Inactive"];
var yValues = [93, 63];
var barColors = [
  "#FC945B",
  "#FFC146",
  "#a278f7"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      // text: "Statistics"
    }
  }
});





var xValues = ["S.Eng", "C.Sci", "C.Tech", "C.I.S", "I.T"];
var yValues = [55, 49, 44, 24, 35];
var barColors = [
    'rgba(255, 99, 132, 0.2)',
    'rgba(255, 159, 64, 0.2)',
    'rgba(255, 205, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(54, 162, 235, 0.2)',
];

new Chart("myBarChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
      ],
      borderWidth: 1
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Number of Employees (Department)"
    }
  }
});