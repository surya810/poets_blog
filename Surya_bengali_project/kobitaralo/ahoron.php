<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    #spl {

      border: 2px solid #fff;
      background: url(img/tiger.png) no-repeat;
      -moz-box-shadow: 10px 10px 5px #ccc;
      -webkit-box-shadow: 10px 10px 5px #ccc;
      box-shadow: 10px 10px 5px #ccc;
      -moz-border-radius: 25px;
      -webkit-border-radius: 25px;
      border-radius: 25px;
    }
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>আহরণ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../lib/w3.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/dropdown.css">
  <link rel="stylesheet" href="css/popup.css">


</head>
<body style=" background-image: url('img/b.jpg'); background-size: cover; overflow-x: hidden;">
  <button onclick="topFunction()" id="myBtn" title="Go to top" style="color: white;">
    <i class="fa fa-arrow-up" aria-hidden="true"></i></button>


  <div style="margin-left: 25px; margin-top :10px;">
    <a href="index.php" class="active" style="background-color: transparent;">
      <center>
        <img id="spl" src="img/KOsitebanne3r.png" height="auto" width="80%">
    </a>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="CloseNav()">&times;</a>

      <a href="#" class=" nav-link " style="font-size: 16px;"><strong>আত্মপ্রকাশ সংখ্যা</strong></a> </li>
      <a href="bookfair.php" class="nav-link" style="font-size: 16px;"><strong>বইমেলা সংখ্যা – ২০২০</strong></a> </li>
      <a href="sompadok.php" class="nav-link" style="font-size: 16px;"><strong>সম্পাদকীয়</strong></a></li>
      <a href="ahoron.php" class=" nav-link" style="font-size: 16px;"><strong>আহরণ</strong></a></li>
      <a href="rupantor.php" class="nav-link " style="font-size: 16px;"><strong>রূপান্তর</strong></a></li>
      <a href="kandari.php " class=" nav-link " style="font-size: 16px;"><strong>কান্ডারী</strong></a></li>
      <a href="pothikrit.php" class=" nav-link " style="font-size: 16px;"><strong>পথিকৃৎ</strong></a></li>
      <a href="notundisha.php" class=" nav-link " style="font-size: 16px;"><strong>নতুন দিশা</strong></a></li>
      <a href="onnovubhan.php " class=" nav-link " style="font-size: 16px;"><strong>অন্যভুবন</strong></a></li>
      <a href="protibimbo.php" class=" nav-link " style="font-size: 16px;"><strong>প্রতিবিম্ব</strong></a></li>

    </div>

    <div class="ex1" style="float: right;">
      <span style="font-size:20px;cursor:pointer;" onclick="OpenNav()"><strong>Menu</strong></span>
      <a class="nav-item nav-link" style="color:black;margin-top: 10px;" href="signin.php">
        <i class="w3-jumbo w3-spin  fa fa-user-circle fa-2x" aria-hidden="true" font-size="20px"></i></a>
    </div>
  </div>
  <br>

  <h2 style="display:inline;text-shadow: 2px 2px grey;">&nbsp;&nbsp;<strong>আহরণ</strong></h2>&nbsp;&nbsp;
  <img src="img/download__4_-removebg-preview.png" style="display: inline;width: 90px; height: 60px;margin-bottom: 5px;">

  <div class="dropdown" style="display:inline; margin-left: 240px;">
    <button class="dropbtn" style="background-color: transparent;font-size: 20px;"><strong>Library</strong></button>
    <div class="dropdown-content" style="margin-left: 520px;">
      <a href="#"><strong>Title, Auther </strong></a>
      <a href="#"><strong>Title, Auther </strong></a>
      <a href="#"><strong>Title, Auther </strong></a>
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;


  <div class="dropdown1" style="display:inline;">
    <button class="dropbtn1" style="background-color: transparent;font-size: 20px;"><strong>Category</strong></button>
    <div class="dropdown1-content" style="margin-left:600px;">
      <a href="onnovubhan.php" style="text-decoration: none;"><strong>অন্যভুবন</strong></a>
      <a href="kandari.php" style="text-decoration: none;"><strong>কান্ডারী</strong></a>
      <a href="pothikrit.php" style="text-decoration: none;"><strong>পথিকৃৎ</strong></a>
      <a href="notundisha.php" style="text-decoration: none;"><strong>নতুন দিশা</strong></a>
      <a href="protibimbo.php" style="text-decoration: none;"><strong>প্রতিবিম্ব</strong></a>
      <a href="sompadok.php" style="text-decoration: none;"><strong>রূপান্তর</strong></a>
      <a href="ahoron.php" style="text-decoration: none;"><strong>আহরণ </strong></a>
    </div>
  </div>

<!-- 
  <div id="abc" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava1()">&times;</a>
    <div class="overlay-content">


      <a href="#" style="font-size: 18px;">
        <h2 style="color: red;">
          <ul style="color:red;">ভূর্জ্যপত্র</ul>
        </h2>&nbsp;&nbsp;&nbsp;&nbsp;<br><strong>যতীন্দ্রমোহন বাগচী : এক পৃথক স্বর</strong> <br>
        <bold>চয়ন সমাদ্দার</bold>
      </a>


      <a href="#" style="font-size: 16px;word-wrap: break-word;">
        ‘বাঙালি কবির পক্ষে, বিশ শতকের প্রথম দুই দশক বড়ো সংকটের সময় গেছে। এই অধ্যায়ের কবিরা –যতীন্দ্রমোহন, করুণানিধান, কিরণধন, এবং আরো অনেকে,<br><br> ...যাঁরা রবীন্দ্রনাথের মধ্যবয়সে উদ্গত হয়ে নজরুল ইসলামের পরে ক্ষয়িত হলেন- তাঁদের রচনা যে এমন সমতলরকম সদৃশ, এমন আশুক্লান্ত, পাণ্ডুর, মৃদুল, কবিতে কবিতে ভেদচিহ্ন যে এত অস্পষ্ট,<br><br> একমাত্র সত্যেন্দ্র দত্ত ছাড়া কাউকেই যে আলাদা করে চেনা যায় না...এর কারণ আমি বলতে চাই...’ (রবীন্দ্রনাথ ও উত্তরসাধক –বুদ্ধদেব বসু)।<br><br><br><br>



        বুদ্ধদেব বসুর মনে হয়েছিল, বিশ শতকের আরম্ভকালে রবীন্দ্রপ্রভাবকে আত্মস্থ করতে না পেরে একদল স্বভাবকবি রবিতাপে <br><br>আত্মাহুতি দিয়েছিলেন। এঁদেরই একজন হলেন যতীন্দ্রমোহন বাগচী (২৭/১১/১৮৭৮-১/০২/১৯৪৮)। বুদ্ধদেবের পর্যবেক্ষণ সত্যি হলে আমাদের আর একটি শব্দও লেখা অনুচিত। <br><br>মৃত কবির শব সাধনা করে লাভ কী? ঠিক এরকম সময় আমাদের মনে আসে, অন্ধ বধূ কিংবা কাজলা-দিদির কথা<br><br>। আর, তখনই দেখি যতীন্দ্রমোহন কন্ঠ তাঁর প্রয়াণের বাহাত্তর বছর পরও বেশ স্পষ্ট শুনছি আমরা। আলাদা করে চিনতেও পারছি।<br><br> ফলে, আমাদের যাচিয়ে নেওয়ার কাজটাও শুরু করতে হয়।<br><br><br><br>



        কবি হিসেবে যতীন্দ্রমোহনের প্রস্তুতি দীর্ঘদিনের। ১৩০৬ সাল থেকেই, -মানে, <br><br>যখন তাঁর একুশ-বাইশ বছর বয়স, তখন থেকে-তাঁর কবিতা ‘সাহিত্য’ ও অন্য মাসিকপত্রে বার হতে থাকে। তবে, ১৩১৬ সাল থেকে ‘মানসী’তেই তাঁর বিশেষভাবে আত্মপ্রকাশ। <br><br>‘লেখা’(১৯০৬) তাঁর প্রথম কবিতার বই। তারপর, ‘রেখা’(১৯১০), ‘অপরাজিতা’(১৯১৩), ‘নাগকেশর’(১৯১৭), ‘বন্ধুর দান’(১৯১৮), ‘জাগরণী’(১৯২২), ‘নীহারিকা’(১৯২৭), ‘মহাভারতী’(১৯৩৬) প্রভৃতি কাব্যগ্রন্থ প্রকাশিত হয়। <br><br>দীর্ঘদিন সম্পাদনার সঙ্গেও যুক্ত ছিলেন যতীন্দ্রমোহন। <br><br>১৩১৩ থেকে ১৩২০ পর্যন্ত ‘মাসিক মানসী’-র সম্পাদক ছিলেন। যুগ্ম সম্পাদক ছিলেন ‘মাসিক যমুনা’<br><br>-র।<br><br> সম্পাদনা করেছেন ‘মাসিক পূর্বাঞ্চল’-এরও। কবি হিসেবে অতি দ্রুত তিনি সমকালের দৃষ্টি আকর্ষণ করেন। তার প্রধান কারণ তাঁর চিত্রলিপিকুশলতা, বিষয়বৈচিত্র্য, পল্লীপ্রকৃতির প্রতি টান, নিপীড়িতা নারীর প্রতি মমত্ব এবং ছন্দ ও শব্দের ওপর নির্বাধ অধিকার।<br><br><br><br>



        আর কথা বাড়ানোর আগে তাঁর ক’টি কবিতার অংশবিশেষ একটু পড়ে নিই আমরা।<br><br><br><br>



        ‘বৃদ্ধা পৌষ-শীত জর্জর, শিরে কুহেলির জটা<br><br>

        মিট্‌ মিট্‌ করি’ মেলিয়া আকাশে ঝাপসা, দৃষ্টি কটা;<br><br>

        প্রভাতে প্রদোষে লতা-পাতা-ঘাসে শিশিরের জাল বোনে-<br><br>

        কভু উদাসীন, রোদে পীঠ দিয়া বসি’ রয় আন্‌মনে।’ (মঞ্জুর, ‘বন্ধুর দান’)<br><br><br><br>







        অথবা,<br><br>



        ‘আমি রূপের দিশা পাই না খুঁজে’-<br><br>

        কোথায় যে তার বাসা,<br><br>

        এক মুখে সে এক- এক সময়<br><br>

        বলে এক-এক ভাষা!<br><br>

        কালো কেশের ঝর্ণা পাশে<br><br>

        কভু বা সে লুকিয়ে হাসে<br><br>

        আঁখির কোণে কভু দেখি<br><br>

        ঝলক সর্বনাশা!’ (উদাসী, ‘নীহারিকা’)<br><br><br><br>





        বেশ বোঝা যাচ্ছে, চিত্রকল্পের হাত ধরে চলেছে কবিভাবনা। ছন্দ একেবারে ভারাক্রান্ত নয়। এবং এখানে রবীন্দ্রনাথকে অনুকরণের কোনও চিহ্নও চোখে পড়ছে না।<br><br>



        রবীন্দ্রনাথের প্রভাব নিশ্চিতভাবে যতীন্দ্রমোহনের ওপর পড়েছিল। ব্যক্তিগত কবিসান্নিধ্যের দরুণ<br><br> সেটা ঘটাই স্বাভাবিক। কিন্তু, সচেতন অনুকরণ বলতে যা বোঝায়, তা তিনি করেননি।<br><br> আসল কথা হলো, বিষয়বস্তু অনুযায়ী কাব্যভাষা বানিয়েছিলেন তিনি- আর পাঁচজন স্বতন্ত্র কবির মতো।<br><br> ঠিক সেই কারণে তাঁর স্বরও নিজের প্রাতিস্বিকতা বা ইনডিভিজ্যুয়ালিটি বজায় রেখেছে বরাবরই।<br><br><br><br>



        অত্যাচারিতের প্রতি সমবেদনা ও দুর্গতের প্রতি মমত্ব এক দিকে, অন্য দিকে অত্যাচারীর প্রতি ঘৃণা ও সামাজিক অসাম্যের বিরূদ্ধে<br><br> প্রতিবাদ উপজীব্য হয়েছিল সত্যেন্দ্রনাথ, কুমুদরঞ্জন প্রমুখের কবিতার। যতীন্দ্রমোহনেরও।<br><br> তখনও রবীন্দ্রনাথ ‘পুনশ্চ’ কাব্যে ‘শুচি’ বা ‘প্রথম পূজা’-র মতো কবিতা লেখেননি। <br><br>নজরুলের সাম্যের গান গাওয়ার তখনও অনেক দেরী। এই সময় যতীন্দ্রমোহন লেখেন,<br><br><br><br>



        ‘শ্রমিকের ফাটছে পিলে ধনিকের বুটের ঘায়ে,<br><br>

        বণিকের বংশ বাড়ে তেতলা প্রাসাদ-ছায়ে;<br><br>

        কে খাটে, কেই বা খাটায়? কে বা কাল খেলায় কাটায়<br><br>

        যে বোনে গায়ের কাপড়, সে মরে আদুল গায়ে।’<br><br><br><br>



        আর কোনও সংশয় থাকা উচিত নয়। এ কাব্যভাষার মধ্যে অনুভূত আবেগের স্পন্দন বড় নিবিড়। <br><br>এই অনুভব আর উচ্চারণ একান্তভাবেই এক স্বতন্ত্র কবির। মনে রাখতে হবে, এই উচ্চারণ যতীন্দ্রমোহনের রচনাধারায় কোনও ব্যতিক্রম নয়।<br><br> নয় তাঁর সমকালীনদের কাব্যকৃতিতেও।<br><br> এই ধারাই আগামীতে যথার্থ সমাজতাত্ত্বিক চিন্তায় পুষ্টি লাভ করে, পরিশুদ্ধ হয়ে আধুনিক বাংলা কবিতার জন্ম দিয়েছে।<br><br><br><br>



        যতীন্দ্রমোহন এবং তাঁর সতীর্থদের একটা দায় ছিল। <br><br>তাঁরা ‘খাঁটি বাঙালিয়ানা’-র কাছে দায়বদ্ধ ছিলেন। সেইকারণে, রবীন্দ্রপ্রভাব সত্ত্বেও, তাঁদের রচনার একটা বড় অংশ লোকায়ত ঐতিহ্য পুষ্ট।<br><br> তাই, তাঁদের রচনায় এক ধরণের ছন্দের শিথিলতা বা ভাষার প্রাকৃত চলন এসে পড়ে। <br><br>এই কারণেই বুদ্ধদেব বসুর মনে হয় এঁরা ‘স্বভাব কবি’ অর্থাৎ কবিতার নির্মাণ কৌশল এঁদের অজানা; এবং তিনি মন্তব্য করেন,<br><br><br><br>



        <strong>“তাঁদের লেখায় দেখা দিল সেই ফেনিলতা, সেই অসহায়, অসংবৃত উচ্ছ্বাস, যা ‘স্বভাবকবি’র কুললক্ষণ”...।</strong> <br><br><br><br>


        কথা হলো, যতীন্দ্রমোহন ও তাঁর সমসাময়িক কবিরা নাগরিক আবাস এবং পল্লীর নিবিড় আশ্রয়ের মধ্যে<br><br> একটা মগ্ন সংলাপ চালাতে পারতেন। বাঙালি সমাজ-সংস্কৃতির শিকড় যে গ্রামবাংলায়<br><br> তার সঙ্গে তাঁদের ছিল অন্তরের যোগ। তাই তাঁদের কবিভাষা বড় বেশি মুখের ভাষার কাছাকাছি।<br><br> বৈদগ্ধ্য বা শীলন সেখানে আপাতভাবে অনুপস্থিত। এবং এটাই তাঁদের মৌলিক গোত্রচিহ্ন। <br><br>তাঁর ‘সন্ধিক্ষণের কবিতা’ প্রবন্ধে এই প্রসঙ্গে অলোক রায় বলেন,<br><br><br><br>



        ‘যতীন্দ্রমোহন কেবল বিষয়বৈচিত্র্যের জন্য জেলের ছেলে, জেলের মেয়ে, চাষার মেয়ে,মালোর মেয়ে, <br><br>অন্ধ বধূ বা কাজলা দিদিকে নিয়ে কবিতা লেখেন না, নিজস্ব কবিভাষা সৃষ্টির প্রয়োজনেই <br><br>এখানে পল্লী-ঘেঁষা বিষয় কবিতায় ব্যবহৃত হয়।’<br><br><br><br>



        ‘বাঁশবাগানের মাথার ওপর চাঁদ উঠেছে ওই-/মা গো আমার শোলোক বলা কাজলা-দিদি কই?’<br><br> বা ‘পায়ের তলায় নরম ঠেকল কি!/আস্তে একটু চল্‌ না ঠাকুরঝি-ও মা, এ যে ঝরা-বকুল!-নয়?’<br><br><br><br>



        -এমন ভাষা ও ভঙ্গী কারও অনুকরণ নয়, একান্ত নিজস্ব।<br><br> আবার,এর অভিনবত্বও চট করে চোখে ধরা পড়ে না। একটা রহস্য রয়েই যায়। আর, যায় বলেই, যতীন্দ্রমোহনের স্বতন্ত্র কন্ঠ মৃত্যুর ওপার থেকেও আমাদের কানে ভেসে আসে।</a>

    </div>
  </div>

  <div id="abc1" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava2()">&times;</a>
    <div class="overlay-content">

      <a href="#" style="font-size: 18px;">
        <h2 style="color: red;">
          <ul style="color:red;">স্বকাল দর্পণ

          </ul>
        </h2>&nbsp;&nbsp;&nbsp;&nbsp;<br><strong>নির্বাণজাত কলম</strong> <br>
        <bold>অজিতেশ নাগ</bold>
      </a>


      <a href="#" style="font-size: 16px;word-wrap: break-word;">
        মৃদুলদার সাথে সেই অর্থে আড্ডা দেওয়ার সাহস কোনদিনই আমার হয়নি, একবার ছাড়া। <br><br>‘সোপান পুরস্কার’ নিতে গেছি বিষ্ণুপুর। মৃদুলদার হাতে থেকে নেওয়া সেই পুরস্কার আমার বাকী জীবনের আনন্দসঙ্গী।<br><br> সেই রাতের আড্ডায় আরও অনেকের সাথে মৃদুলদা ছিলেন। স্বকন্ঠে কত কবিতা, কত গল্প। মৃদুলদা’র নিজের মুখে নিজের গল্পপাঠ শ্রবণ এক ব্যতিক্রমী অভিজ্ঞতা।<br><br><br><br>



        কবি মৃদুল দাশগুপ্ত। নামটা উচ্চারিত হলেও বুকের বাঁদিকে বেজে ওঠে জলপাই রঙয়ের এসরাজ। <br><br>সেই কবেকার কাব্যগ্রন্থ (১৯৮০), তবু আজও পড়লে মনে হয় সদ্য সদ্য লেখা, যেন এই কথাগুলোই আমি বলতে চেয়েছিলাম <br><br>অথবা আমার মত লাখো শব্দশ্রমিক। যিনি অক্লেশে বলতে পারেন, ‘অনিষ্টকর অন্ধকারে যখন পৃথিবী আচ্ছন্ন হয়ে যায় / চারদিকে ডাইনীদের ফুৎকারের মতো হাওয়ার ফিসফাস / আর পাখিরা গুপ্ত সাপের আতঙ্কে আশ্রয় ছেড়ে অন্ধকারে ঝাঁপ দেয় / ঠিক তখুনি, ইহুদিরা হেসে ওঠে’।<br><br><br><br>



        তিনি একাধারে সাংবাদিক, প্রাবন্ধিক এবং কবি তো বটেই। তাঁর প্রথম কবিতা যে বছরে প্রকাশিত (শীর্ষবিন্দু পত্রিকায়) হয়, সেই বছরে আমার জন্ম। সেই <br><br>থেকে আজ অবধি কবি তাঁর ছন্দ-অবয়ব আর মন্তাজ সৃষ্টির গুণে বাঙালি পাঠককে আজও বিমোহিত করে আসছেন। হ্যাঁ, আজও।<br><br>আর ঠিক সেই কারণেই আমি বিশ্বাস করি কবিরা কখনও কোন নির্দিষ্ট দশকের হন না। বাঙালি মাত্রই কবিতাপ্রেমী। তবে কিছু কবি আছেন যারা আবহমানকাল ধরে বিরাজমান থাকেন এবং পরবর্তীকালেও থাকবেন, স্বমহিমায়, কবি মৃদুল দাশগুপ্ত তাঁদের মধ্যে একজন।<br><br> তিনি এমন একজন কলম-ঈশ্বর, নিজের ব্যাপারে স্ববিশ্লেষণে যিনি বলতে পারেন, ‘আমি মনে করি আমি নিজে কবিতা লিখি না।<br><br> আকাশ থেকে নামে। কবিতা লেখার কালে, একটা কলমের যে ভূমিকা, আমার ভূমিকাও ঠিক সেরকম। ধারক বা বাহকের। আর তাই, কোনও বিষয়-কেন্দ্রিক কবিতা লিখতে পারি না।<br><br> ফলে কবিতার আর নামকরণ করে উঠতে পারিনা সহজে’।



        কবির অকপট স্বীকারোক্তি, ‘আমি যাতে শ্রীরামপুরে বন্ধুদের সঙ্গে নকশালপন্থী হতে না পারি সেজন্য আমার বাবা কলকাতা বা শ্রীরামপুর<br><br> কলেজে আমায় ভর্ত্তি করান নি’। মৃদুলদা সেই বাক্য মেনে নিয়েছিলেন অক্লেশে।<br><br> তেমনই গুরুবাক্যের মত মেনে নিয়েছিলেন কবি দেবদাস আচার্যের উপদেশ, ‘আমরা কখনও প্রতিষ্ঠানকে লেখক-কবি সরবরাহ করব না’। তাই সারাজীবনে কয়েকটিবার তিনি প্রতিষ্ঠানে লেখা দিলেও,<br><br> প্রতিষ্ঠানকে তাঁর গা ঘেঁষতে দেন নি। তিনি স্ব-রবি-মহিমায় উজ্জ্বল, কোনও প্রতিষ্ঠানের সাধ্য কী এই ভিন্নস্বরের স্রষ্টার সামনে প্রদীপ জ্বালায়?<br><br> তাই আজও <br><br>তাঁকে কবিদের ভিড়ে দেখা যায় না, তিনি নিজ-গৃহে অধিষ্ঠান থাকেন। দেবতা আবার কবে কোথায় যত্রতত্র ভ্রমণ করে বেড়ান?<br><br> আজকাল কবিরা যখন দু-পাতা লিখেই কাব্যগ্রন্থ প্রকাশে উদগ্রীব হয়, কবি মৃদুল দাশগুপ্তের সেখানে হাতে গোনা ক’টি কবিতার বই। সেরা খাদ্যের পরিমাণ সীমিত থাকাই <br><br>তো স্বাভাবিক। তাই রবীন্দ্র পুরস্কার (‘সোনার বুদ্বুদ’ কাব্যগ্রন্থের জন্য) পেয়েও তিনি নির্লিপ্ত থাকেন।<br><br> আবার তাঁর কবিতা (‘ক্রন্দনরত জননীর পাশে’) স্কুলপাঠ্য হওয়ায় তিনি মন্তব্য করেন, ‘বেশ চমকপ্রদ। লক্ষ লক্ষ ছেলে মেয়ে আমার কবিতা পড়ে এটা খুবই আনন্দের কথা। যদিও আমি এসব নিয়ে বিশেষ ভাবি না’। সত্যিই, অনুধাবনযোগ্য।<br><br><br><br>



        নিছক একটি ঘরানা তৈরি করে তার মধ্যে নিজেকে বেঁধে ফেলায় বিশ্বাসী নন কবি মৃদুল দাশগুপ্ত। <br><br>ঘরানার চেয়ে বাহিরানায় তাঁর আগ্রহ বেশি। একটি সাক্ষাত্‍কারে কবি নিজেই বলেছেন, 'আমি বার বার বদলাতে চেয়েছি।<br><br> পাশ ফিরেছি, চিৎ হয়েছি, উপুড় হয়েছি’। তিনি কবি মৃদুল দাশগুপ্ত যিনি বুক ঠুকে লিখতে পারেন, 'আমি মৃদুল দাশগুপ্ত,<br><br> আমি আরব গেরিলাদের সমর্থন করি’। তিনি চিৎকার করে কবিতা আবৃত্তির বিরোধীদলে। তিনি বলেন, ‘কবিতা মূলত একান্ত পাঠের বিষয়’। তিনি শুধু <br><br>কবিতাই লেখেন না, মজাচ্ছলে ছড়ায় লেখেন, ‘সরস্বতীর হাঁস, সেও কি এমএ পাশ?’ এবার আপনি তাৎক্ষণিক মজা নিতে পারেন, আবার আপনি গভীর<br><br> চিন্তাবোধে আক্রান্ত হতে পারেন। চেনা আশপাশকে নিয়ে ছড়া লেখার পাশাপাশি মৃদুলদার কলমে বারবার ধরা দিয়েছে চেনা-অচেনা ময়দান। কখনও ক্রিকেট, কখনও <br><br>হকি, টেনিস আর সব সময় ফুটবল। সেই ফুটবলের আবার কোনও গণ্ডি নেই। মারাদোনার পায়ের শটে বল চলে যায় ইস্টবেঙ্গলের গ্যালারিতে। ব্রাজিলের সবুজ-হলুদ কখনও<br><br> রং বদলে লাল-হলুদ হয়ে যায়। কখনও সবুজ-মেরুন। তিনি সর্বত্রগামী। তিনি কবি মৃদুল দাশগুপ্ত।<br><br><br><br>



        মৃদুলদা লেখেন,<br><br> ‘অতি অল্পে চলে যাবে আমাদের বাকি দিনগুলো / শুনে চক্ষু ছলছল, তবে বুঝি- সম্মত সম্মত’।<br><br> বিশাল গ্রাম্ভারি অথবা অভিধান ঘেঁটে নিংড়ে বের করে আনা শব্দগুচ্ছ নয়, <br><br>একেবারে আটপৌরে শব্দের মালায় গেঁথে ফেলাটাই হচ্ছে মৃদুলদার বৈশিষ্ট্য। ক্রন্দনরতা জননীর পাশে না থাকলে কবির অর্থহীন মনে হয়েছে লেখালেখিকে।<br><br> তাঁর কাছে নিহত ভাইয়ের শবদেহ মানে ক্রোধ আর নিহত ভাইয়ের শবদেহ দেখে জেগে ওঠা ক্রোধের সঙ্গে যুক্ত থাকে মূল্যবোধ। কবিতায় তিনি বারুদ। কবির বিবেক জেগে<br><br> ওঠার পটভূমি হল তাঁর কবিতা আর ক্রন্দনরতা জননী হলেন কবির স্বদেশ। ঠিক এখানেই তাঁর স্বতন্ত্রতা। সেই স্বতন্ত্রতা তিনি বজায় রেখেছেন তাঁর প্রতিটি কাব্যগ্রন্থে, <br><br>সেটা ‘জলপাই কাঠের এসরাজ’ হোক, বা ‘এভাবে কাঁদে না’ বা, ‘গোপনে হিংসার কথা বলি’ কিংবা ‘সূর্যাস্তে নির্মিত গৃহ’, ‘ধানখেত থেকে’ নচেৎ ‘সোনার বুদ্বুদ’।<br><br><br><br>


        <strong></strong>
        ‘গুপ্তপুঁথি-জ্ঞানে আমি দিয়ে যাব পাণ্ডুলিপিখানি / বিরাট কাঠের ওই পেটিকায় রেখে দিও গৃহে, এক কোণে / সযত্নে কিছুটা কাল, ক্রমে তুমি ভুলে যাবে, জানি। / কী আছে ভিতরে শুধু ভাবনাই ঢেউ দেবে মনে’। বিশ্বকবির ভাষাই দেখতে পেলাম কি? একটু অন্যভাবে? ‘শুনি ক্ষণে ক্ষণে মনে মনে অতল জলের আহ্বান / মন রয় না, রয় না, রয় না ঘরে, চঞ্চল প্রাণ / ভাসায়ে দিব আপনারে, ভরা জোয়ারে, / সকল-ভাবনা-ডুবানো ধারায় করিব স্নান / ব্যর্থ বাসনার দাহ হবে নির্বাণ’।</strong>

        সেই মহানির্বাণের দিকে আমাদের অঙ্গুলিনির্দেশ করে চলেছেন কবি মৃদুল দাশগুপ্ত। <br><br>জলপাই কাঠের এসরাজ আজও বেজে চলেছে একনিষ্ঠরূপে, আমার শ্রবণেন্দ্রিয়ের পাশাপাশি মননেন্দ্রিয়ের প্রজ্ঞা-সেবা পেয়ে চলেছে অবিরাম, অবিশ্রান্তরূপে। এভাবেই চলুক।<br><br>


      </a>

    </div>
  </div> -->
<!-- 
  <div id="abc2" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava3()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>

  <div id="abc3" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava4()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>

  <div id="abc4" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava5()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>

  <div id="abc5" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava6()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>


  <div id="abc6" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava7()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>
  <div id="abc7" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava8()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>
  <div id="abc8" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava9()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>
  <div id="abc9" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava10()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div>
  <div id="abc10" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNava11()">&times;</a>
    <div class="overlay-content">
      <a href="#" style="font-size: 18px;">Title,&nbsp;&nbsp;&nbsp;&nbsp;Author&nbsp;&nbsp;|&nbsp;&nbsp; Published Date</a>
      <a href="#" style="font-size: 14px;word-wrap: break-word;">story</a>

    </div>
  </div> -->


  <!--casection rd  starts from here-->
<!-- 
  <div class="card-deck" style="margin-top: 50px;cursor: pointer;  margin-right: 0px;">
    <div class="flip-card" style="Margin-left: 50px; text-align: center; margin-top: 30px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <h3 style="margin-top: 30px;">ভূর্জ্যপত্র</h3>
        </div>
        <div class="flip-card-back">
          <h5>ভূর্জ্যপত্র</h5>
          <p>24-11-2020</p>
          <span style="font-size:30px;cursor:pointer" id="abc" onclick="openNava1()"> <button style=" background: grey; border: none; padding: 10px; color: white; width: 40%; border-radius: 25px;font-size: 20px;">Read</button></span>
        </div>
      </div>
    </div>


    <div class="flip-card" style="Margin-left: 50px; text-align: center ; margin-top: 30px;">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <h3 style="margin-top: 30px;">স্বকাল দর্পণ

          </h3>
        </div>
        <div class="flip-card-back">
          <h5>স্বকাল দর্পণ

          </h5>
          <p>24-11-2020</p>
          <span style="font-size:30px;cursor:pointer" id="abc1" onclick="openNava2()"> <button style=" background: grey; border: none; padding: 10px; color: white; width: 40%; border-radius: 25px;font-size: 20px;">Read</button></span>
        </div>
      </div>
    </div>


  </div>
  </div>



 -->
 

 <?php
  if (isset($_POST["view"])) {



    $link = mysqli_connect("localhost", "root", "", "rgs");

    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM blog WHERE id='$id' ";





    $result1 = $link->query($sql1);


    if ($result1->num_rows > 0) {
      // output data of each row


      while ($row = $result1->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $selects = $row['selects'];
        $date = $row['date'];
        $name = $row['name'];
        $description = $row['description'];
        $writes = $row['writes'];
        $element = "
          
          <div id=\"abc7\" class=\"overlay\">
        
            <div class=\"overlay-content\">
              <a href=\"#\" style=\"font-size: 18px;\">$title&nbsp;&nbsp;|&nbsp;&nbsp;$date</a>
              <a href=\"#\" style=\"font-size: 16px;word-wrap: break-word; \">
               $name<br><br>
               $description<br><br>
               $writes<br>
              </a>
             
            </div>
          </div>
          ";
        echo  $element;
      }
    } else {
      echo "0 results";
    }

    $link->close();
  }
  ?>

  <div class="card-deck" style="margin-top: 50px;cursor: pointer;  margin-right: 0px;">
    <!-- cards logic starting from here -->
    <?php
    $link = mysqli_connect("localhost", "root", "", "rgs");
    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $res = "SELECT * FROM blog where selects ='Ahoron' ORDER By id DESC"; //it will show the the card in desc order according to ID

    $result = $link->query($res);

    if ($result->num_rows > 0) {
      // output data of each row

      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $selects = $row['selects'];
        $date = $row['date'];
        $name = $row['name'];
        $element = "

   <form action=\"ahoron.php?id = $id\" method='post'>
            <div class=\"flip-card\" style=\"Margin-left: 50px; text-align: center; margin-top: 30px;\">
                <div class=\"flip-card-inner\">
                  <div class=\"flip-card-front\">
                    <h4 style=\"margin-top: 30px;\">$title</h4>
                  </div>
                  <div class=\"flip-card-back\">
                    <h6>$title</h6> 
                    <p>$date</p>
                    <span style=\"font-size:30px;cursor:pointer;\" id=\"story\" > 
                      <button style=\"margin-bottom: 10%;background: grey; border: none; padding: 10px; color: white;     width: 40%; border-radius: 25px;font-size: 20px;\"> <a href=\"show.php?id=$id\" style = \"text-decoration: none ; color: white;\">Read </a>
                      </button>
                    </span>


                  </div>
                </div>
              </div>
              </form>
              ";
        echo  $element;
      }
    } else {
      echo "0 results";
    }

    $link->close();

    ?>




  </div>





  <script src="css/navbar.css"></script>
  <script src="css/card.css"></script>
  <!-- <script src="javascript/navbar.min.js"></script> -->
</body>

</html>