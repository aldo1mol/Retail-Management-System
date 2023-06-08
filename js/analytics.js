// charts
var ctx = document.getElementById('barChart');
 new Chart(ctx, {
 type: 'line',
 data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
      label: '% of Sales',
      data: [ 40, 80, 95, 20, 60, 10, 30, 15, 25, 82, 1, 9, 4],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1,
      }]
  },
  options: {
      scales: {
      y: {
          beginAtZero: true
      }
      }
  }
  });




  // doughnut chart
  // Data for the chart




// Create the doughnut chart
var ctx = document.getElementById('barChart');
 new Chart(ctx, {
 type: 'doughnut',
 data: {
      labels: ['Customrers','Sales','Products',],
      datasets: [{
      label: '% of ',
      data: [300, 50, 100],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1,
      }]
  },
  options: {
      scales: {
      y: {
          beginAtZero: true
      }
      }
  }
  });





  