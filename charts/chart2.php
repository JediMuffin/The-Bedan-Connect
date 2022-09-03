
<canvas id="myChart2" width="400" height="400"></canvas>
<script>
const ctx2 = document.getElementById('myChart2');
const myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
     datasets: [{
        label: '# of Votes',
        data: [10, 20, 30],
          backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ] 
    }],
    
    labels: [
        'Employed',
        'Self-Employed',
        'Unemployed'
    ]
    }

});
</script>

