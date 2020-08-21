@include ('front.layouts.header')

<style>

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>

<div class="container">
	<h1 style="background-color: #DFAADE;text-align: center;padding: 10px">Room Rent</h1>
	</div>
<div class="container">
<div class="columns">
  <ul class="price">
    <li class="header">AC</li>
    <li class="grey">tk 2000 / day</li>
    <li>FOOD & BEVERAGE</li>
    <li>NEWSPAPERS & MAGAZINES</li>
    <li>NURSING CARE</li>
    
  </ul>
</div>

<div class="columns">
   <ul class="price">
    <li class="header">Non AC</li>
    <li class="grey">tk 1200 / day</li>
    <li>FOOD & BEVERAGE</li>
    <li>NEWSPAPERS & MAGAZINES</li>
    <li>NURSING CARE</li>

  </ul>
</div>

<div class="columns">
   <ul class="price">
    <li class="header">Others</li>
    <li class="grey">tk 800/ day</li>
    <li>FOOD & BEVERAGE</li>
    <li>NEWSPAPERS & MAGAZINES</li>
    <li>NURSING CARE</li>

  </ul>
</div>

</div>

<!--footer-->
@include ('front.layouts.footer')
