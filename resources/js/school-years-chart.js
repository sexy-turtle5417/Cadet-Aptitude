import { Chart } from "chart.js/auto";

const context = document.getElementById('chart');

const data = [
    { year: 2010, count: 587 },
    { year: 2011, count: 135 },
    { year: 2012, count: 300 },
    { year: 2013, count: 350 },
    { year: 2014, count: 480 },
    { year: 2015, count: 490 },
    { year: 2016, count: 500 },
  ];

  new Chart(
   context,
    {
      type: 'bar',
      data: {
        labels: data.map(row => row.year),
        datasets: [
          {
            label: 'ROTC graduates per year',
            data: data.map(row => row.count)
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            },
            x: {
                beginAtZero: true
            }
        }
      }
    }
  );
