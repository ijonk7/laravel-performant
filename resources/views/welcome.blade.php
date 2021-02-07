<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="d-flex justify-content-center jumbotron">
            <h1>2020 Sales Report</h1>
        </div>

        <form action="/action_page.php">
            <div class="row">
                <div class="col-sm-2 form-group">
                    <label for="sel1">Select Product (select one):</label>
                    <select class="form-control" id="idProduct">
                        <option>--Select--</option>
                        <option value="Air Conditioner">Air Conditioner</option>
                        <option value="Biscuits">Biscuits</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Clothes">Clothes</option>
                        <option value="Comic">Comic</option>
                        <option value="Cookbook">Cookbook</option>
                        <option value="DVD Player">DVD Player</option>
                        <option value="Earphone">Earphone</option>
                        <option value="Handphone">Handphone</option>
                        <option value="Hat">Hat</option>
                        <option value="Knife">Knife</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Microwave">Microwave</option>
                        <option value="Pants">Pants</option>
                        <option value="Pen">Pen</option>
                        <option value="Printer">Printer</option>
                        <option value="Refrigerator">Refrigerator</option>
                        <option value="Shoes">Shoes</option>
                        <option value="TV">TV</option>
                        <option value="Watches">Watches</option>
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="sel1">Select Country (select one):</label>
                    <select class="form-control" id="idCountry">
                        <option>--Select--</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Russia">Russia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Turkey">Turkey</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States of America">United States of America</option>
                    </select>
                </div>
                <div class="form-row col-sm-3">
                    <div class="col-6">
                        <label for="idAgeFirst">Choose Between Ages:</label>
                        <select class="form-control" id="idAgeFirst">
                            <option>--Select--</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="idAgeSecond"><span style="visibility:hidden;">Choose Between Ages:</span></label>
                        <select class="form-control" id="idAgeSecond">
                            <option>--Select--</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                        </select>
                    </div>
                </div>
                <div class="form-row col-sm-4">
                    <div class="col-6">
                        <label for="idDateFirst">Choose Between Date:</label>
                        <input class="form-control" type="date" value="2020-01-01" id="idDateFirst">
                    </div>
                    <div class="col-6">
                        <label for="idDateSecond"><span style="visibility:hidden;">Choose Between Date:</span></label>
                        <input class="form-control" type="date" value="2020-12-31" id="idDateSecond">
                    </div>
                </div>
                <div class="col-sm-1">
                    <label><span style="visibility:hidden;">Choose Between</span></label>
                    <button type="button" class="btn btn-primary">Filter Report</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container pt-3">
        <canvas id="myChart"></canvas>
        <div class="d-flex justify-content-end pt-3">
            <p><strong>* Total rows in the orders table: 97460 rows.</strong></p>
        </div>
    </div>


    <br>

    {{-- {{ round(xdebug_peak_memory_usage()/1048576, 2) }} --}}

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                datasets: [{
                    label: 'Sales',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: Object.values(@json($months))
                }]
            },

            // Configuration options go here
            options: {}
        });

    </script>
</body>

</html>
