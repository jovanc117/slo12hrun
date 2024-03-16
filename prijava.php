<?php include 'head.php';?>
    <main>
        <div class="besedilo">
            <h2>Prijava</h2>
            <p>Na 6 ali 12-urni tek po središču Kranja se lahko prijavite s pomočjo spodnjega obrazca. Po prijavi si lahko ogledate vaše ime v seznamu tekačev spodaj, za veljavno prijavo pa morate poravnati še štartnino.</p>
        </div>
        <form>
          <h2>Prijavni obrazec</h2>
          <p>Polja označena z * so obvezna</p>
          <p>Trajane teka *</p>
          <select id="tek" name="tek" class="tek" value="">
            <option value="" selected="">izberi</option>
            <option value="12 ur">12ur</option>
            <option value="6 ur">6ur</option>
          </select>
          <p>Ime *</p>
          <input id="ime" type="text" placeholder="Ime">
          <p>Priimek *</p>
          <input id="priimek" type="text" placeholder="Priimek">
          <p>Spol *</p>
          <select id="spol" name="spol" class="spol" value="">
            <option value="" selected="">izberi</option>
            <option value="Moški">Moški</option>
            <option value="Ženska">Ženska</option>
          </select>
          <p>Starost *</p>
          <select id="starost" name="starost" class="starost" value="">
            <option value="" selected="">izberi</option>
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
            <option value="71">71</option>                
            <option value="72">72</option>                
            <option value="73">73</option>                
            <option value="74">74</option>                
            <option value="75">75</option>                
            <option value="76">76</option>                
            <option value="77">77</option>                
            <option value="78">78</option>
            <option value="79">79</option>
            <option value="80">80</option>
          </select>
          <p>Kraj *</p>
          <input id="kraj" type="text" placeholder="Kraj">
          <p>Naslov *</p>
          <input id="naslov" type="text" placeholder="Naslov">
          <p>Poštna številka *</p>
          <input id="posta" type="text" placeholder="Poštna številka">
          <p>Država *</p>
          <select id="drzava" name="drzava" class="drzava" value="">
            <option value="" selected="">izberi</option>
            <option value="Avstralija">Avstralija</option>                
            <option value="Avstrija">Avstrija</option>                
            <option value="Belgija">Belgija</option>                
            <option value="Bosna in Hercegovina">Bosna in Hercegovina</option>                
            <option value="Češka Republika">Češka Republika</option>                
            <option value="Ciper">Ciper</option>                
            <option value="Črna Gora">Črna Gora</option>                
            <option value="Danska">Danska</option>                
            <option value="Finska">Finska</option>                
            <option value="Francija">Francija</option>                
            <option value="Grčija">Grčija</option>                
            <option value="Hrvaška">Hrvaška</option>                
            <option value="Irska">Irska</option>                
            <option value="Italija">Italija</option>                
            <option value="Japonska">Japonska</option>                
            <option value="Kanada">Kanada</option>                
            <option value="Kitajska">Kitajska</option>                
            <option value="Madžarska">Madžarska</option>                
            <option value="Makedonija">Makedonija</option>                
            <option value="Nemčija">Nemčija</option>                
            <option value="Nizozemska">Nizozemska</option>                
            <option value="Norveška">Norveška</option>                
            <option value="Poljska">Poljska</option>                
            <option value="Portugalska">Portugalska</option>                
            <option value="Ruska Federacija">Ruska Federacija</option>                
            <option value="Slovaška">Slovaška</option>                
            <option value="Slovenija">Slovenija</option>                
            <option value="Španija">Španija</option>                
            <option value="Srbija">Srbija</option>                
            <option value="Švedska">Švedska</option>                
            <option value="Švica">Švica</option>                
            <option value="Turčija">Turčija</option>                
            <option value="ZDA">ZDA</option>                
            <option value="Združeno kraljestvo">Združeno kraljestvo</option>
            <option value="Drugo">Drugo</option>
          </select>
          <p>Klub</p>
          <input id="klub" type="text" placeholder="Klub">
          <p>Majica *</p>
          <select id="majica" name="majica">
            <option value="" selected="">izberi</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
          <p>E-mail *</p>
          <input id="email" name="email" type="email" placeholder="E-mail">
          <div id="message"></div>
          <button style="height:44px;" id="saveusers" type="button">Prijava</button>
        </form>
        <!--<div id="message"></div>-->



        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
          $(function(){
              $("#saveusers").on('click', function(){
                  
                  var ime      = $("#ime").val();
                  var priimek  = $("#priimek").val();
                  var spol     = $("#spol").val();
                  var starost  = $("#starost").val();
                  var kraj     = $("#kraj").val();
                  var naslov   = $("#naslov").val();
                  var posta    = $("#posta").val();
                  var drzava   = $("#drzava").val();
                  var klub     = $("#klub").val();
                  var majica   = $("#majica").val();
                  var email    = $("#email").val();
                  var tek      = $("#tek").val();
                  

                  $.ajax({
                    method: "POST",
                    url:    "create.php",
                    data: { "ime": ime, "priimek": priimek, "spol": spol, "starost": starost, "kraj": kraj, "naslov": naslov, "posta": posta, "drzava": drzava, "klub": klub, "majica": majica, "email": email, "tek": tek},
                   }).done(function( data ) {
                      var result = $.parseJSON(data);
                      var str = '';
                      var cls = '';
                      var eid = '';
                      if(result == 1) {
                        str = 'Uspešna prijava.';
                        cls = 'success';
                      }else if( result == 2) {
                        str = 'Vnesite veljavni e-mail.';
                        cls = 'error';
                        eid = '#email';
                      }else if( result == 3) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#ime';
                      }else if( result == 4) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#priimek';
                      }else if( result == 5) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#spol';
                      }else if( result == 6) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#starost';
                      }else if( result == 7) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#kraj';
                      }else if( result == 8) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#naslov';
                      }else if( result == 9) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#posta';
                      }else if( result == 10) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#drzava';
                      }else if( result == 11) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#majica';
                      }else if( result == 12) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#email';
                      }else if( result == 13) {
                        str = 'Polja z oznako * so zahtevana.';
                        cls = 'error';
                        eid = '#tek';
                      }else{
                        str = 'Prijava ni bila uspešna. Prosimo poskusite kasneje.';
                        cls = 'error';
                      }
                    $(".err").removeClass("err")
                    $(".error").removeClass("error")
                    $("#message").show(100).html(str).addClass(cls);
                    $(eid).addClass("err");
                });
             });
           });
      
        </script>

        <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","create.php?q="+str,true);
                xmlhttp.send();
            }
        }
        </script>

        <div class="plcilo">
            <h3>Plačilo štartnin</h3>
            <p>Prejemnik: MAAS s.p.</p>
            <p>Trboje 4, 4000 Kranj, Slovenia</p>
            <p>Koda namena: Plačilo izdatka - Slo12Run </p>
            <p>IBAN: SI56 6100 0001 3956 513 </p>
            <p>BIC/SWIFT BANKE: HDELSI22 </p>
            <p>Davčna številka: 75167760</p>
            </div>
        </div>
        <?php 
        include 'seznam.php';?>
        <div class="center-gumb">
        <a href="login.php" class="prijavab">Prijava za urejane rezultatov</a>
      </div>
        <?php
        include 'rezultati.php';
        ?>
        <?php include 'footer.php';?>