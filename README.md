<h3>Movie Applications Using http://themoviedb.org/ API</h3>
<p align="center"><img src="https://movie.readywebapps.com/img.png" width="600" height="auto"></p>



   <a href="https://movie.readywebapps.com/" terget ="_blank">Live website URL </a>
    
    
 <h3>Step to run this project </h3>
   
<ol>
 <li> Download the Project </li>
 <li> Edit .env file </li>
 <li> Change Database settings in .env file </li>
    
 <li> run:  composer install  </li>
    
 <li> run:  php artisan key:generate  </li>
 
 <li> run:  php artisan migrate  </li>
 <li> run:  php artisan serve </li>
</ol>

<h3>Comand to save all movie category and movie list by category  in Database</h3>
<ol>
    <li>Run the commands </li>
 <li>$ php artisan tinker </li>
 <li> $controller = app()->make('App\Http\Controllers\SaveDataController'); </li>
 <li>  app()->call([$controller, 'save'], []); </li>
    
</ol>
 <h3> Enjoy ! </h3>
 
 
