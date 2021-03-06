
    <div wire:ignore.self class="container-fluid">
        <div class="card-header d-flex">
            <mark class="ml-auto bg-warning">Info: Retrieving data from {{ $dataFrom }}.</mark>
        </div>
        <div class="d-flex justify-content-center jumbotron">
            <h1><a href="">Sales Report 2020</a></h1>
        </div>

        <form wire:submit.prevent="filter">
            <div class="row">
                <div class="col-sm-2 form-group">
                    <label>Select Product (select one):</label>
                    <select class="form-control" wire:model.defer="product">
                        <option value="">--Select--</option>
                        <option value="7">Air Conditioner</option>
                        <option value="1">Biscuits</option>
                        <option value="19">CCTV</option>
                        <option value="2">Clothes</option>
                        <option value="3">Comic</option>
                        <option value="4">Cookbook</option>
                        <option value="8">DVD Player</option>
                        <option value="16">Earphone</option>
                        <option value="9">Handphone</option>
                        <option value="6">Hat</option>
                        <option value="17">Knife</option>
                        <option value="14">Laptop</option>
                        <option value="10">Microwave</option>
                        <option value="13">Pants</option>
                        <option value="11">Pen</option>
                        <option value="5">Printer</option>
                        <option value="15">Refrigerator</option>
                        <option value="20">Shoes</option>
                        <option value="12">TV</option>
                        <option value="18">Watches</option>
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label>Select Country (select one):</label>
                    <select class="form-control" wire:model.defer="country">
                        <option value="">--Select--</option>
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
                        <label>Choose Between Ages:</label>
                        <select class="form-control @error('ageFirst') is-invalid state-invalid @enderror" wire:model.defer="ageFirst">
                            <option value="">--Select--</option>
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
                        @error('ageFirst')
                        <div class="bg-danger-transparent-2 text-danger mb-4" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label><span style="visibility:hidden;">Choose Between Ages:</span></label>
                        <select class="form-control @error('ageSecond') is-invalid state-invalid @enderror" wire:model.defer="ageSecond">
                            <option value="">--Select--</option>
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
                        @error('ageSecond')
                        <div class="bg-danger-transparent-2 text-danger mb-4" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row col-sm-3">
                    <div class="col-6">
                        <label>Choose Between Date:</label>
                        <input class="form-control @error('dateFirst') is-invalid state-invalid @enderror" type="date" value="2020-01-01" wire:model.defer="dateFirst">
                        @error('dateFirst')
                        <div class="bg-danger-transparent-2 text-danger mb-4" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label><span style="visibility:hidden;">Choose Between Date:</span></label>
                        <input class="form-control @error('dateSecond') is-invalid state-invalid @enderror" type="date" value="2020-12-31" wire:model.defer="dateSecond">
                        @error('dateSecond')
                        <div class="bg-danger-transparent-2 text-danger mb-4" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-2">
                    <label><span style="visibility:hidden;">Choose Between</span></label>
                    <button type="submit" class="btn btn-primary">Filter Report</button>
                </div>
            </div>
        </form>
    </div>

