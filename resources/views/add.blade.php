<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Новости науки</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href=" {{ asset('stylesheets/foundation.min.css')}}">
  <link rel="stylesheet" href="{{ asset('stylesheets/main.css') }}">
  <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">
  <script src="{{ asset('javascripts/modernizr.foundation.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('fonts/ligature.css') }}">
  
  <!-- Google fonts -->
  <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic') }}" rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<!-- ######################## Main Menu ######################## -->
 
<nav>

     <div class="twelve columns header_nav">
     <div class="row">
      
        <ul id="menu-header" class="nav-bar horizontal">
        
            <li><a href="{{ route('public') }}">Главная</a></li>     
            <li><a href="{{ route('headings', ['id' => 'Искусственный интеллект']) }}">Искусственный интеллект</a></li>
            <li><a href="{{ route('headings', ['id' => 'Искусственная нейронная сеть']) }}">Искусственная нейронная сеть</a></li>
            <li><a href="{{ route('headings', ['id' => 'Распознавание образов']) }}">Распознавание образов</a></li>
            <li><a href="{{ route('headings', ['id' => 'Робототехника']) }}">Робототехника</a></li>
            <li><a href="{{ route('headings', ['id' => 'Информационное общество']) }}">Информационное общество</a></li>
            <li><a href="{{ route('headings', ['id' => 'Автоматическая обработка текста']) }}">Автоматическая обработка текста</a></li>
      
        </ul>
        

        
      </div>  
      </div>
      
</nav><!-- END main menu -->
        
<!-- ######################## Header ######################## -->
     
    <header>
       
            <div class="row">
               <h4>Добавление статьи</h4>
    <article>
            <form method="post" action="/form-submit">
                @csrf
                <p class="excerpt">Название<input type="text" name="title"> </p>

                <p class="excerpt">Первое предложение<input type="text" name="lid"></p>

                <p class="excerpt">Изображение<input type="text" name="image"></p>

                    <p class="excerpt">Рубрика
                        <select name="rubrics"></p>
                            @foreach ($rubrics as $rubric)
                                <option value="{{ $rubric->rubrics }}">{{ $rubric->rubrics }} </option>
                            @endforeach
                        </select>

                <p class="excerpt"> Контент<textarea name="content" rows="10"></textarea> </p>

                <button type="submit" class="button">Добавить статью</button>
            </form>
             
             
    </article>
    
    
            </div>
            
    </header>
      
<!-- ######################## Section ######################## -->

<section class="section_light">

      
      


      
      

<!-- ######################## Footer ######################## -->  
      
<footer>

      <div class="row">
      
          <div class="twelve columns footer">
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a> 
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
              <a href="" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
              <a href="" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
          </div>
          
      </div>

</footer>		  

<!-- ######################## Scripts ######################## --> 

    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript"></script> 
    <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript"></script>
</body>
</html>