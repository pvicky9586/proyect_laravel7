 <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Mi web</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    </head>
    <body>
      <header class="page-header">
        <div class="center-contents">
          <div;>
            <a class="logo" href="#" title=""><img src="images/logo-example.png" alt=""></a>
            <span class="toggle-nav">Menu</span>
          </div;>
          
          <nav class="page-nav collapse">
            <ul>
              <li><a href="#" title="">Archive</a></li>
              <li><a href="#" title="">About us</a></li>
              <li><a href="#" title="">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <main class="page-contents">
        <h1>Titular de la página</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia recusandae ipsa beatae consequuntur. Dolor repudiandae fugiat, rem, adipisci sit tenetur dolores corrupti amet molestiae, consequatur labore. Laboriosam sit voluptate quaerat!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia recusandae ipsa beatae consequuntur. Dolor repudiandae fugiat, rem, adipisci sit tenetur dolores corrupti amet molestiae, consequatur labore. Laboriosam sit voluptate quaerat!</p>
      </main>

      <script type="text/javascript">
         function toggleNavigation(){
      $('.page-header').toggleClass('menu-expanded');
      $('.page-nav').toggleClass('collapse');
    }
 
    // EVENTOS DEL DOM
    $(window).on('load',function(){
      $('.toggle-nav').click(toggleNavigation);
    });
      </script>

  <p>Select your favorite colors:</p>

    <input type="checkbox" name="color" value="red"> Red
    <input type="checkbox" name="color" value="green"> Green
    <input type="checkbox" name="color" value="blue"> Blue

    <button id="btn">Get Selected Colors</button>

   
    <script>
    function getSelectedCheckboxValues(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    return values;
}

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {
    alert(getSelectedCheckboxValues('color'));
});
    </script>



    </body>
    </html>