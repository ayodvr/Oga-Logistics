@extends('mobilelayouts.master')
@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Create New Partner Account</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Home
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Partner</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" style="width:92%; margin:auto">
                            {{$error}}</div>
                        @endforeach
                        @endif
                        @if(session('success'))
                        <div class="alert alert-success" style="width:92%; margin:auto">
                        {{session('success')}}</div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger" style="width:92%; margin:auto">
                        {{session('error')}}</div>
                         @endif
                         <br>
                       <div class="row formavlidation-wrapper">
                            <div class="col-xl-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" class="form-horizontal" action="{{route('storePartner')}}">
                                          @csrf
                                          <div class="form-group">
                                            <label class="control-label" for="firstname1">First Name</label>
                                            <div class="mb-2">
                                                <input type="text" class="form-control" name="name" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label" for="firstname1">Last Name</label>
                                          <div class="mb-2">
                                              <input type="text" class="form-control" name="last_name" placeholder="Last Name" />
                                          </div>
                                      </div>
                                            <div class="form-group">
                                                <label class="control-label" for="firstname1">Company/Business Name</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="bname" name="bname" placeholder="Business Name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Phone Number</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile Number" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="email1">Email</label>
                                                <div class="mb-2">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Company Email Address" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="username1">R.C Number</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="cac" name="cac" placeholder="CAC Identification Number" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Address</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Business Address" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputState">State</label>
                                                    <select class="form-control" name="state" id="state" placeholder="Pick State" onchange="show(this)">
                                                       
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputState">Local Government Area</label>
                                                    <select class="form-control" name="lga" id="lga" placeholder="State LGA">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label class="control-label" for="password1">Password</label>
                                              <div class="input-group">
                                                {{-- <div class="input-group-prepend">
                                                 <span><img src="{{asset('mobstyle/icons/lock.svg')}}" alt="Lock Icon"></span>
                                                </div> --}}
                                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="togglePassword('password', this)"></i></span>
                                                {{-- <div class="input-group-append password-visibility">
                                                    <span>
                                                        <img src="{{asset('mobstyle/icons/eye.svg')}}" alt="Password Visibility Icon">
                                                    </span>
                                                </div> --}}
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label" for="password1">Confirm Password</label>
                                            <div class="input-group">
                                              {{-- <div class="input-group-prepend">
                                                  <span><img src="{{asset('mobstyle/icons/lock.svg')}}" alt="Lock Icon"></span>
                                              </div> --}}
                                              <input class="form-control" type="password" name="password_confirmation" id="confirm-password"  placeholder="Confirm Password">
                                              <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="togglePassword('confirm-password', this)"></i></span>
                                              {{-- <div class="input-group-append password-visibility">
                                                  <span>
                                                      <img src="{{asset('mobstyle/icons/eye.svg')}}" alt="Password Visibility Icon">
                                                  </span>
                                              </div> --}}
                                              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                          </div>
                                          </div>
                                            {{-- <div class="form-group">
                                                <label class="control-label" for="password1">Password</label>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="confirm_password1">Confirm password</label>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control" id="confirm_password1" name="confirm_password1" placeholder="Confirm password" />
                                                </div>
                                            </div> --}}
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Validation row  -->

                    </div>
                    <!-- end container-fluid -->


                    <script type="text/javascript">
  
  var ngst = [
  {"ID": "0", "Name": "----Choose State----"},
  {"ID": "Abuja", "Name": "Abuja"},
  {"ID": "Abia", "Name": "Abia"},
  {"ID": "Adamawa", "Name": "Adamawa"},
  {"ID": "Anambra", "Name": "Anambra"},
  {"ID": "Akwa Ibom", "Name": "Akwa Ibom"},
  {"ID": "Bauchi", "Name": "Bauchi"},
  {"ID": "Bayelsa", "Name": "Bayelsa"},
  {"ID": "Benue", "Name": "Benue"},
  {"ID": "Borno", "Name": "Borno"},
  {"ID": "Cross River", "Name": "Cross River"},
  {"ID": "Delta", "Name": "Delta"},
  {"ID": "Ebonyi", "Name": "Ebonyi"},
  {"ID": "Edo", "Name": "Edo"},
  {"ID": "Ekiti", "Name": "Ekiti"},
  {"ID": "Enugu", "Name": "Enugu"},
  {"ID": "Gombe", "Name": "Gombe"},
  {"ID": "Imo", "Name": "Imo"},
  {"ID": "Jigawa", "Name": "Jigawa"},
  {"ID": "Kaduna", "Name": "Kaduna"},
  {"ID": "Kano", "Name": "Kano"},
  {"ID": "Katsina", "Name": "Katsina"},
  {"ID": "kebbi", "Name": "Kebbi"},
  {"ID": "Kogi", "Name": "Kogi"},
  {"ID": "Kwara", "Name": "Kwara"},
  {"ID": "Lagos", "Name": "Lagos"},
  {"ID": "Nassarawa", "Name": "Nassarawa"},
  {"ID": "Niger", "Name": "Niger"},
  {"ID": "Ogun", "Name": "Ogun"},
  {"ID": "Ondo", "Name": "Ondo"},
  {"ID": "Osun", "Name": "Osun"},
  {"ID": "Oyo", "Name": "Oyo"},
  {"ID": "Plateau", "Name": "Plateau"},
  {"ID": "Rivers", "Name": "Rivers"},
  {"ID": "Sokoto", "Name": "Sokoto"},
  {"ID": "Taraba", "Name": "Taraba"},
  {"ID": "Yobe", "Name": "Yobe"},
  {"ID": "Zamfara", "Name": "Zamfara"},
  ];
  
  var ele = document.getElementById('state');
  for (var i = 0; i < ngst.length; i++) {
  
  ele.innerHTML = ele.innerHTML +
      '<option value="' + ngst[i]['ID'] + '">' + ngst[i]['Name'] + '</option>';
  }
  
  
  function show(ele) {
  
  $("#lga").empty();
  $('#writew').val('');
  
  var parts = 
    {
      "Abia": [
        "Aba North",
        "Aba South",
        "Arochukwu",
        "Bende",
        "Ikwuano",
        "Isiala-Ngwa North",
        "Isiala-Ngwa South",
        "Isuikwato",
        "Obi Nwa",
        "Ohafia",
        "Osisioma",
        "Ngwa",
        "Ugwunagbo",
        "Ukwa East",
        "Ukwa West",
        "Umuahia North",
        "Umuahia South",
        "Umu-Neochi"
      ],
      "Adamawa": [
        "Demsa",
        "Fufore",
        "Ganaye",
        "Gireri",
        "Gombi",
        "Guyuk",
        "Hong",
        "Jada",
        "Lamurde",
        "Madagali",
        "Maiha",
        "Mayo-Belwa",
        "Michika",
        "Mubi North",
        "Mubi South",
        "Numan",
        "Shelleng",
        "Song",
        "Toungo",
        "Yola North",
        "Yola South"
      ],
      "Anambra": [
        "Aguata",
        "Anambra East",
        "Anambra West",
        "Anaocha",
        "Awka North",
        "Awka South",
        "Ayamelum",
        "Dunukofia",
        "Ekwusigo",
        "Idemili North",
        "Idemili south",
        "Ihiala",
        "Njikoka",
        "Nnewi North",
        "Nnewi South",
        "Ogbaru",
        "Onitsha North",
        "Onitsha South",
        "Orumba North",
        "Orumba South",
        "Oyi"
      ],
      "Akwa Ibom": [
        "Abak",
        "Eastern Obolo",
        "Eket",
        "Esit Eket",
        "Essien Udim",
        "Etim Ekpo",
        "Etinan",
        "Ibeno",
        "Ibesikpo Asutan",
        "Ibiono Ibom",
        "Ika",
        "Ikono",
        "Ikot Abasi",
        "Ikot Ekpene",
        "Ini",
        "Itu",
        "Mbo",
        "Mkpat Enin",
        "Nsit Atai",
        "Nsit Ibom",
        "Nsit Ubium",
        "Obot Akara",
        "Okobo",
        "Onna",
        "Oron",
        "Oruk Anam",
        "Udung Uko",
        "Ukanafun",
        "Uruan",
        "Urue-Offong/Oruko ",
        "Uyo"
      ],
      "Bauchi": [
        "Alkaleri",
        "Bauchi",
        "Bogoro",
        "Damban",
        "Darazo",
        "Dass",
        "Ganjuwa",
        "Giade",
        "Itas/Gadau",
        "Jama'are",
        "Katagum",
        "Kirfi",
        "Misau",
        "Ningi",
        "Shira",
        "Tafawa-Balewa",
        "Toro",
        "Warji",
        "Zaki"
      ],
      "Bayelsa": [
        "Brass",
        "Ekeremor",
        "Kolokuma/Opokuma",
        "Nembe",
        "Ogbia",
        "Sagbama",
        "Southern Jaw",
        "Yenegoa"
      ],
      "Benue": [
        "Ado",
        "Agatu",
        "Apa",
        "Buruku",
        "Gboko",
        "Guma",
        "Gwer East",
        "Gwer West",
        "Katsina-Ala",
        "Konshisha",
        "Kwande",
        "Logo",
        "Makurdi",
        "Obi",
        "Ogbadibo",
        "Oju",
        "Okpokwu",
        "Ohimini",
        "Oturkpo",
        "Tarka",
        "Ukum",
        "Ushongo",
        "Vandeikya"
      ],
      "Borno": [
        "Abadam",
        "Askira/Uba",
        "Bama",
        "Bayo",
        "Biu",
        "Chibok",
        "Damboa",
        "Dikwa",
        "Gubio",
        "Guzamala",
        "Gwoza",
        "Hawul",
        "Jere",
        "Kaga",
        "Kala/Balge",
        "Konduga",
        "Kukawa",
        "Kwaya Kusar",
        "Mafa",
        "Magumeri",
        "Maiduguri",
        "Marte",
        "Mobbar",
        "Monguno",
        "Ngala",
        "Nganzai",
        "Shani"
      ],
      "Cross River": [
        "Akpabuyo",
        "Odukpani",
        "Akamkpa",
        "Biase",
        "Abi",
        "Ikom",
        "Yarkur",
        "Odubra",
        "Boki",
        "Ogoja",
        "Yala",
        "Obanliku",
        "Obudu",
        "Calabar South",
        "Etung",
        "Bekwara",
        "Bakassi",
        "Calabar Municipality"
      ],
      "Delta": [
        "Oshimili",
        "Aniocha",
        "Aniocha South",
        "Ika South",
        "Ika North-East",
        "Ndokwa West",
        "Ndokwa East",
        "Isoko south",
        "Isoko North",
        "Bomadi",
        "Burutu",
        "Ughelli South",
        "Ughelli North",
        "Ethiope West",
        "Ethiope East",
        "Sapele",
        "Okpe",
        "Warri North",
        "Warri South",
        "Uvwie",
        "Udu",
        "Warri Central",
        "Ukwani",
        "Oshimili North",
        "Patani"
      ],
      "Ebonyi": [
        "Afikpo South",
        "Afikpo North",
        "Onicha",
        "Ohaozara",
        "Abakaliki",
        "Ishielu",
        "lkwo",
        "Ezza",
        "Ezza South",
        "Ohaukwu",
        "Ebonyi",
        "Ivo"
      ],
      "Enugu": [
        "Enugu South,",
        "Igbo-Eze South",
        "Enugu North",
        "Nkanu",
        "Udi Agwu",
        "Oji-River",
        "Ezeagu",
        "IgboEze North",
        "Isi-Uzo",
        "Nsukka",
        "Igbo-Ekiti",
        "Uzo-Uwani",
        "Enugu Eas",
        "Aninri",
        "Nkanu East",
        "Udenu."
      ],
      "Edo": [
        "Esan North-East",
        "Esan Central",
        "Esan West",
        "Egor",
        "Ukpoba",
        "Central",
        "Etsako Central",
        "Igueben",
        "Oredo",
        "Ovia SouthWest",
        "Ovia South-East",
        "Orhionwon",
        "Uhunmwonde",
        "Etsako East",
        "Esan South-East"
      ],
      "Ekiti": [
        "Ado",
        "Ekiti-East",
        "Ekiti-West",
        "Emure/Ise/Orun",
        "Ekiti South-West",
        "Ikare",
        "Irepodun",
        "Ijero,",
        "Ido/Osi",
        "Oye",
        "Ikole",
        "Moba",
        "Gbonyin",
        "Efon",
        "Ise/Orun",
        "Ilejemeje."
      ],
      "Abuja": [
        "Abaji",
        "AMAC",
        "Bwari",
        "Gwagwalada",
        "Kuje",
        "Kwali"
      ],
      "Gombe": [
        "Akko",
        "Balanga",
        "Billiri",
        "Dukku",
        "Kaltungo",
        "Kwami",
        "Shomgom",
        "Funakaye",
        "Gombe",
        "Nafada/Bajoga",
        "Yamaltu/Delta."
      ],
      "Imo": [
        "Aboh-Mbaise",
        "Ahiazu-Mbaise",
        "Ehime-Mbano",
        "Ezinihitte",
        "Ideato North",
        "Ideato South",
        "Ihitte/Uboma",
        "Ikeduru",
        "Isiala Mbano",
        "Isu",
        "Mbaitoli",
        "Mbaitoli",
        "Ngor-Okpala",
        "Njaba",
        "Nwangele",
        "Nkwerre",
        "Obowo",
        "Oguta",
        "Ohaji/Egbema",
        "Okigwe",
        "Orlu",
        "Orsu",
        "Oru East",
        "Oru West",
        "Owerri-Municipal",
        "Owerri North",
        "Owerri West"
      ],
      "Jigawa": [
        "Auyo",
        "Babura",
        "Birni Kudu",
        "Biriniwa",
        "Buji",
        "Dutse",
        "Gagarawa",
        "Garki",
        "Gumel",
        "Guri",
        "Gwaram",
        "Gwiwa",
        "Hadejia",
        "Jahun",
        "Kafin Hausa",
        "Kaugama Kazaure",
        "Kiri Kasamma",
        "Kiyawa",
        "Maigatari",
        "Malam Madori",
        "Miga",
        "Ringim",
        "Roni",
        "Sule-Tankarkar",
        "Taura",
        "Yankwashi"
      ],
      "Kaduna": [
        "Birni-Gwari",
        "Chikun",
        "Giwa",
        "Igabi",
        "Ikara",
        "jaba",
        "Jema'a",
        "Kachia",
        "Kaduna North",
        "Kaduna South",
        "Kagarko",
        "Kajuru",
        "Kaura",
        "Kauru",
        "Kubau",
        "Kudan",
        "Lere",
        "Makarfi",
        "Sabon-Gari",
        "Sanga",
        "Soba",
        "Zango-Kataf",
        "Zaria"
      ],
      "Kano": [
        "Ajingi",
        "Albasu",
        "Bagwai",
        "Bebeji",
        "Bichi",
        "Bunkure",
        "Dala",
        "Dambatta",
        "Dawakin Kudu",
        "Dawakin Tofa",
        "Doguwa",
        "Fagge",
        "Gabasawa",
        "Garko",
        "Garum",
        "Mallam",
        "Gaya",
        "Gezawa",
        "Gwale",
        "Gwarzo",
        "Kabo",
        "Kano Municipal",
        "Karaye",
        "Kibiya",
        "Kiru",
        "kumbotso",
        "Kunchi",
        "Kura",
        "Madobi",
        "Makoda",
        "Minjibir",
        "Nasarawa",
        "Rano",
        "Rimin Gado",
        "Rogo",
        "Shanono",
        "Sumaila",
        "Takali",
        "Tarauni",
        "Tofa",
        "Tsanyawa",
        "Tudun Wada",
        "Ungogo",
        "Warawa",
        "Wudil"
      ],
      "Katsina": [
        "Bakori",
        "Batagarawa",
        "Batsari",
        "Baure",
        "Bindawa",
        "Charanchi",
        "Dandume",
        "Danja",
        "Dan Musa",
        "Daura",
        "Dutsi",
        "Dutsin-Ma",
        "Faskari",
        "Funtua",
        "Ingawa",
        "Jibia",
        "Kafur",
        "Kaita",
        "Kankara",
        "Kankia",
        "Katsina",
        "Kurfi",
        "Kusada",
        "Mai'Adua",
        "Malumfashi",
        "Mani",
        "Mashi",
        "Matazuu",
        "Musawa",
        "Rimi",
        "Sabuwa",
        "Safana",
        "Sandamu",
        "Zango"
      ],
      "Kebbi": [
        "Aleiro",
        "Arewa-Dandi",
        "Argungu",
        "Augie",
        "Bagudo",
        "Birnin Kebbi",
        "Bunza",
        "Dandi",
        "Fakai",
        "Gwandu",
        "Jega",
        "Kalgo",
        "Koko/Besse",
        "Maiyama",
        "Ngaski",
        "Sakaba",
        "Shanga",
        "Suru",
        "Wasagu/Danko",
        "Yauri",
        "Zuru"
      ],
      "Kogi": [
        "Adavi",
        "Ajaokuta",
        "Ankpa",
        "Bassa",
        "Dekina",
        "Ibaji",
        "Idah",
        "Igalamela-Odolu",
        "Ijumu",
        "Kabba/Bunu",
        "Kogi",
        "Lokoja",
        "Mopa-Muro",
        "Ofu",
        "Ogori/Mangongo",
        "Okehi",
        "Okene",
        "Olamabolo",
        "Omala",
        "Yagba East",
        "Yagba West"
      ],
      "Kwara": [
        "Asa",
        "Baruten",
        "Edu",
        "Ekiti",
        "Ifelodun",
        "Ilorin East",
        "Ilorin West",
        "Irepodun",
        "Isin",
        "Kaiama",
        "Moro",
        "Offa",
        "Oke-Ero",
        "Oyun",
        "Pategi"
      ],
      "Lagos": [
        "Agege",
        "Ajeromi-Ifelodun",
        "Alimosho",
        "Amuwo-Odofin",
        "Apapa",
        "Badagry",
        "Epe",
        "Eti-Osa",
        "Ibeju/Lekki",
        "Ifako-Ijaye",
        "Ikeja",
        "Ikorodu",
        "Kosofe",
        "Lagos Island",
        "Lagos Mainland",
        "Mushin",
        "Ojo",
        "Oshodi-Isolo",
        "Shomolu",
        "Surulere"
      ],
      "Nasarawa": [
        "Akwanga",
        "Awe",
        "Doma",
        "Karu",
        "Keana",
        "Keffi",
        "Kokona",
        "Lafia",
        "Nasarawa",
        "Nasarawa-Eggon",
        "Obi",
        "Toto",
        "Wamba"
      ],
      "Niger": [
        "Agaie",
        "Agwara",
        "Bida",
        "Borgu",
        "Bosso",
        "Chanchaga",
        "Edati",
        "Gbako",
        "Gurara",
        "Katcha",
        "Kontagora",
        "Lapai",
        "Lavun",
        "Magama",
        "Mariga",
        "Mashegu",
        "Mokwa",
        "Muya",
        "Pailoro",
        "Rafi",
        "Rijau",
        "Shiroro",
        "Suleja",
        "Tafa",
        "Wushishi"
      ],
      "Ogun": [
        "Abeokuta North",
        "Abeokuta South",
        "Ado-Odo/Ota",
        "Egbado North",
        "Egbado South",
        "Ewekoro",
        "Ifo",
        "Ijebu East",
        "Ijebu North",
        "Ijebu North East",
        "Ijebu Ode",
        "Ikenne",
        "Imeko-Afon",
        "Ipokia",
        "Obafemi-Owode",
        "Ogun Waterside",
        "Odeda",
        "Odogbolu",
        "Remo North",
        "Shagamu"
      ],
      "Ondo": [
        "Akoko North East",
        "Akoko North West",
        "Akoko South Akure East",
        "Akoko South West",
        "Akure North",
        "Akure South",
        "Ese-Odo",
        "Idanre",
        "Ifedore",
        "Ilaje",
        "Ile-Oluji",
        "Okeigbo",
        "Irele",
        "Odigbo",
        "Okitipupa",
        "Ondo East",
        "Ondo West",
        "Ose",
        "Owo"
      ],
      "Osun": [
        "Aiyedade",
        "Aiyedire",
        "Atakumosa East",
        "Atakumosa West",
        "Boluwaduro",
        "Boripe",
        "Ede North",
        "Ede South",
        "Egbedore",
        "Ejigbo",
        "Ife Central",
        "Ife East",
        "Ife North",
        "Ife South",
        "Ifedayo",
        "Ifelodun",
        "Ila",
        "Ilesha East",
        "Ilesha West",
        "Irepodun",
        "Irewole",
        "Isokan",
        "Iwo",
        "Obokun",
        "Odo-Otin",
        "Ola-Oluwa",
        "Olorunda",
        "Oriade",
        "Orolu",
        "Osogbo"
      ],
      "Oyo": [
        "Afijio",
        "Akinyele",
        "Atiba",
        "Atigbo",
        "Egbeda",
        "Ibadan Central",
        "Ibadan North",
        "Ibadan North West",
        "Ibadan South East",
        "Ibadan South West",
        "Ibarapa Central",
        "Ibarapa East",
        "Ibarapa North",
        "Ido",
        "Irepo",
        "Iseyin",
        "Itesiwaju",
        "Iwajowa",
        "Kajola",
        "Lagelu Ogbomosho North",
        "Ogbmosho South",
        "Ogo Oluwa",
        "Olorunsogo",
        "Oluyole",
        "Ona-Ara",
        "Orelope",
        "Ori Ire",
        "Oyo East",
        "Oyo West",
        "Saki East",
        "Saki West",
        "Surulere"
      ],
      "Plateau": [
        "Barikin Ladi",
        "Bassa",
        "Bokkos",
        "Jos East",
        "Jos North",
        "Jos South",
        "Kanam",
        "Kanke",
        "Langtang North",
        "Langtang South",
        "Mangu",
        "Mikang",
        "Pankshin",
        "Qua'an Pan",
        "Riyom",
        "Shendam",
        "Wase"
      ],
      "Rivers": [
        "Abua/Odual",
        "Ahoada East",
        "Ahoada West",
        "Akuku Toru",
        "Andoni",
        "Asari-Toru",
        "Bonny",
        "Degema",
        "Emohua",
        "Eleme",
        "Etche",
        "Gokana",
        "Ikwerre",
        "Khana",
        "Obia/Akpor",
        "Ogba/Egbema/Ndoni",
        "Ogu/Bolo",
        "Okrika",
        "Omumma",
        "Opobo/Nkoro",
        "Oyigbo",
        "Port-Harcourt",
        "Tai"
      ],
      "Sokoto": [
        "Binji",
        "Bodinga",
        "Dange-shnsi",
        "Gada",
        "Goronyo",
        "Gudu",
        "Gawabawa",
        "Illela",
        "Isa",
        "Kware",
        "kebbe",
        "Rabah",
        "Sabon birni",
        "Shagari",
        "Silame",
        "Sokoto North",
        "Sokoto South",
        "Tambuwal",
        "Tqngaza",
        "Tureta",
        "Wamako",
        "Wurno",
        "Yabo"
      ],
      "Taraba": [
        "Ardo-kola",
        "Bali",
        "Donga",
        "Gashaka",
        "Cassol",
        "Ibi",
        "Jalingo",
        "Karin-Lamido",
        "Kurmi",
        "Lau",
        "Sardauna",
        "Takum",
        "Ussa",
        "Wukari",
        "Yorro",
        "Zing"
      ],
      "Yobe": [
        "Bade",
        "Bursari",
        "Damaturu",
        "Fika",
        "Fune",
        "Geidam",
        "Gujba",
        "Gulani",
        "Jakusko",
        "Karasuwa",
        "Karawa",
        "Machina",
        "Nangere",
        "Nguru Potiskum",
        "Tarmua",
        "Yunusari",
        "Yusufari"
      ],
      "Zamfara": [
        "Anka",
        "Bakura",
        "Birnin Magaji",
        "Bukkuyum",
        "Bungudu",
        "Gummi",
        "Gusau",
        "Kaura",
        "Namoda",
        "Maradun",
        "Maru",
        "Shinkafi",
        "Talata Mafara",
        "Tsafe",
        "Zurmi"
      ]
    };
  
  var msg = ele.value;
  
  var ele1 = document.getElementById('lga');
  
  for (i = 0; i < parts[msg].length; i++) {
  
    $('#slga1').show();
    $('#writew1').show();
  
  ele1.innerHTML = ele1.innerHTML +
      '<option value="' + parts[msg][i] + '">' + parts[msg][i] + '</option>';
  }
  
  
      }
  
  </script>

<script>
  function togglePassword(checkbox, element) {
      const passwordInput = document.getElementById(checkbox);
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

       // Change the icon based on password visibility
       element.textContent = type === 'password' ? '' : '';

  }

</script>





@endsection