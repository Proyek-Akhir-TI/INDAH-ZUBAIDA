<?php 
    if (!$_SESSION['id_user']){
       echo "
        <meta http-equiv='refresh' content ='0; url=../index.html'>
      ";
    } else {
?>



<div class="row ">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Barang</h5>
                          <h2 class="mb-3 font-18">
                            <?php
                              include "../koneksi.php";
                              $sql = "SELECT nama_barang from tb_barang";
                              $brg = mysqli_query($koneksi,$sql);
                              $hitung_barang = mysqli_num_rows($brg);
                              echo "$hitung_barang";
                            ?>

                          </h2>
                          </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Asal Barang</h5>
                          <h2 class="mb-3 font-18">
                             <?php
                              include "../koneksi.php";
                              $sql = "SELECT asal_barang from tb_asal_barang";
                              $AsalBarang = mysqli_query($koneksi,$sql);
                              $hitung_AsalBarang = mysqli_num_rows($AsalBarang);
                              echo "$hitung_AsalBarang";
                            ?>
                          </h2>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Lokasi</h5>
                          <h2 class="mb-3 font-18">
                             <?php
                              include "../koneksi.php";
                              $sql = "SELECT nama_lokasi from tb_lokasi";
                              $lokasi = mysqli_query($koneksi,$sql);
                              $hitung_lokasi = mysqli_num_rows($lokasi);
                              echo "$hitung_lokasi";
                            ?>
                          </h2>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
    
      

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tahun', "Baik","Rusak","Hilang"],
          ['2011', <?php  $thn2011 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2011' ");
        echo mysqli_num_rows($thn2011); ?>,
        <?php  $thn2011 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2011' ");
        echo mysqli_num_rows($thn2011); ?>,
        <?php  $thn2011 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2011' ");
        echo mysqli_num_rows($thn2011); ?>],

          ['2012', <?php  $thn2012 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2012' ");
        echo mysqli_num_rows($thn2012); ?>,
        <?php  $thn2012 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2012' ");
        echo mysqli_num_rows($thn2012); ?>,
        <?php  $thn2012 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2012' ");
        echo mysqli_num_rows($thn2012); ?>],

        ['2013', <?php  $thn2013 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2013' ");
        echo mysqli_num_rows($thn2013); ?>,
        <?php  $thn2013 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2013' ");
        $thn2013 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2013' ");
        echo mysqli_num_rows($thn2013); ?>,
        <?php  $thn2013 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2013' ");
        echo mysqli_num_rows($thn2013); ?>],

        ['2014', <?php  $thn2014 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2014' ");
        echo mysqli_num_rows($thn2014); ?>,
        <?php  $thn2014 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2014' ");
        echo mysqli_num_rows($thn2014); ?>,
        <?php  $thn2014 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2014' ");
        echo mysqli_num_rows($thn2014); ?>],
          
         
          ['2015', <?php  $thn2015 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2015' ");
        echo mysqli_num_rows($thn2015); ?>,
        <?php  $thn2015 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2015' ");
        echo mysqli_num_rows($thn2015); ?>,
        <?php  $thn2015 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2015' ");
        echo mysqli_num_rows($thn2015); ?>],

          ['2016', <?php  $thn2016 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2016' ");
        echo mysqli_num_rows($thn2016); ?>,
        <?php  $thn2016 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2016' ");
        echo mysqli_num_rows($thn2016); ?>,
        <?php  $thn2016 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2016' ");
        echo mysqli_num_rows($thn2016); ?>
        ],
          
         ['2017', <?php  $thn2017 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='baik' and year(tahun_peroleh) = '2017' ");
        echo mysqli_num_rows($thn2017); ?>,
        <?php  $thn2017 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='rusak' and year(tahun_peroleh) = '2017' ");
        echo mysqli_num_rows($thn2017); ?>,
        <?php  $thn2017 = mysqli_query($koneksi,"SELECT nama_barang FROM tb_barang where kon_akhir_tahun='hilang' and year(tahun_peroleh) = '2017' ");
        echo mysqli_num_rows($thn2017); ?>
        ],
          


        ]);

        var options = {
          chart: {
            title: 'Grafik Tahunan',
            subtitle: 'Rusak, Hilang: 2011-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
     </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>

         

          </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php 
    }
  ?>