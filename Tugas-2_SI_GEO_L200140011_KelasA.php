<!DOCTYPE  html>
<html>
<head>
<center>
<!-- Memanggil pustaka Google Map -->
<SCRIPT src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXAJO4mUDJ_yfJKtISReCE79mjkYkmJAQ"></SCRIPT>
 
<!-- CSS Untuk mengatur ukuran Peta -->
<style type="text/css">
              #mapDiv { 
width: 700px; 
height: 450px;
  }
</style>
 
<!-- membuat script untuk menampilkan peta -->
<SCRIPT>
           //variabel GLOBAL
var  map; //langsung di eksekusi oleh browser  
function initMap() {
    //dieksekusi jika nama fungsi di panggil
// mengatur opsi map 
var mapOptions = {
//lokasi awal yang akan di tampilkan di tengah layar
center: new google.maps.LatLng(-7.9078, 110.8252),
zoom: 18,  // 1 s/d 21
      mapTypeId: google.maps.MapTypeId.ROADMAP
};
  // variabel utk mengontrol elemen div
 var mapElement = document.getElementById('mapDiv');
// proses membuat peta dan meletakannya pada elemen div
 map = new google.maps.Map(mapElement, mapOptions);
 
}
// menampilkan peta, pada saat dokumen html di // LOAD dalam screen browser
// panggil fungsi initMap() pada saat dokumen di load dalam screen
google.maps.event.addDomListener(window, 'load', initMap);
 
</SCRIPT>
<script>
if (navigator.geolocation) {
//minta ijin kepada user, jika diijinkan 
//navigator.geolocation = True
 
//membaca posisi/lokasi client (browser) saat ini
navigator.geolocation.getCurrentPosition(
  // position adalah data lokasi hasil pembacaan 
  // berupa lokasi dalam json
  function(position) {
 
          console.log(position);   //menulis di konsole
 
          var lat = position.coords.latitude;
          var lng = position.coords.longitude;
 
 // devCenter adalah data lokasi dengan format 
 // google.maps
          var devCenter =  new google.maps.LatLng(lat, lng);
 
 // mengatur lokasi PUSAT peta (map) 
          map.setCenter(devCenter);
 //mengatur Level ZOOM (18)
          map.setZoom(18);
                                    
 console.log(latitude + " -- " + longitude);
 
       });
 
    }
 

</script>
</head>
<body>
<h2><b>Tugas 2<br>Sistem Informasi Geografi Kelas A <br>
Naisha Rahma I.(L200140011)</br>
Menampilkan Geo Location dari pengguna</b></h2>
        <input id="btnRoad" type="button" value="RoadMap">
		<input id="btnTerrain" type="button" value="Terrain">
        <input id="btnSat" type="button" value="Satellite">
		<input id="btnHybrid" type="button" value="Hybrid">
		<div id="mapDiv"></div>
		
<script>
document.getElementById('btnRoad').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.ROADMAP); 
});
document.getElementById('btnSat').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
});
document.getElementById('btnHybrid').addEventListener('click', function(){
               map.setMapTypeId(google.maps.MapTypeId.HYBRID);
});
document.getElementById('btnTerrain').addEventListener('click', function(){
                      map.setMapTypeId(google.maps.MapTypeId.TERRAIN);
});
</script>
<!-- lokasi untuk menampilkan peta -->
<div id="mapDiv"></div>
</body>
</center>
</html>
