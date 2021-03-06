@extends('layout.main')
@section('content')

<section class="relative">
    <div class="row text-center mt-2">
        <div class="col-3">
            <div class="data-user py-4">
                <h2>1407 / 97</h2>
            </div>
        <div class="more-info">
            <h5>More Info</h5>
        </div>
        </div>
         <div class="col-3">
            <div class="data-user py-4 ">
            <h2>1407 / 97</h2>
            </div>
        <div class="more-info">
        <h5>More Info</h5>

        </div>
        </div>

        <div class="col-3">
            <div class="data-user py-4">
                <h2>1407 / 97</h2>
            </div>
        <div class="more-info">
            <h5>More Info</h5>
        </div>
         </div>

         <div class="col-3">
            <div class="data-user py-4">
                <h2>1407 / 97</h2>
            </div>
        <div class="more-info">
            <h5>More Info</h5>
        </div>
         </div>
    </div>
    <div class="row mt-3">
    <div class="col col-6 ">
    <div class="chart-container pie">
    <div class="info"><h3 class="py-2 text-white">Informasi Registrasi</h3></div>

    <div class="pie-chart-container">
      <canvas id="pie-chart"></canvas>
    </div>
  </div>
  </div>
    </div>
</section>

@endsection

@section('script2')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script>
  $(function(){
      //get the pie chart canvas
      var ctx = $("#pie-chart");

      //pie chart data
      var data = {
        labels: ['Menunggu Verifikasi','Rekaman','Proses Pembuatan','Pengantaran','Selesai','Ditolak'],
        display:true,
        datasets: [
          {
            label: "Users Count",
            data: [12,13,14,50,20,59],
            backgroundColor: [
              "#8F8686",
              "#3EB5CD",
              "#FFB833",
              "#C4CE2C",
              "#518D00",
              "#FF6D44",
            ],
            borderColor: [
              "#FFFFFF",
              "#FFFFFF",
              "#FFFFFF",
              "#FFFFFF",
              "#FFFFFF",
              "#FFFFFF",
            ],
            borderWidth: [2, 2, 2, 2, 2,2,2]
          }
        ]
      };

      //options
      var options = {
        responsive: true,
        title: {
          display: false,
          position: "top",
          text: "Informasi Pendaftaran",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          backgroundColor:"black",
          position: "left",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };

      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });

  });
</script>

@endsection
