    <!---FOOTER-->
        <footer id="footer">
          
              <table id="tablefooter" border="0">
               
                  <th style="color:white; vertical-align:top; text-align: center;"><b><u>INFORMOHU</u></b><br><br>
                   
                      <ul>
                      <li><a href="http://localhost:1234/palestra/_permbajtja/hiperlink/about.html" style="color:white;"><b>Rreth Nesh</b></a></li>
                      <li><a href="_permbajtja/_permbajtjaIndex/php/Kontakt.php" target="_blank" style="color:white;"><b>Kontakt</b></a></li>              
                      </ul>   
                      
                  <ul> 
                      <li><a href="http://localhost:1234/palestra/_permbajtja/hiperlink/Privacy Policy.html" style="color:white;"><b>Privacy Policy</b></a></li>
                      <li><a href="http://localhost:1234/palestra/_permbajtja/hiperlink/Disclaimer Policy.html" style="color:white;"><b>Disclaimer Policy</b></a></li>
                      <li><a href="http://localhost:1234/palestra/_permbajtja/hiperlink/Copyright.html" style="color:white;"><b>Copyright</b></a></li>
                      <li><a href="http://localhost:1234/palestra/_permbajtja/hiperlink/Terms of Use.html" style="color:white;"><b>Terms of Use</b></a></li>
                  
                  </ul>
                  
                  
                  <th style=" color:white; vertical-align:top; text-align: center;"><b><u>SUBSCRIBE</u></b><br><br>
                      <p style="color:white;"><b>Njoftohu me një email për çdo të re nga Palestra X</b></p><br>
                      
                    <form action="_permbajtja/_permbajtjaIndex/php/subscribe.php" method="POST">

                          <div class="form-group">
                              <div class="text-center">
                                  <label for="email">Adresa Emailit:</label>
                              </div>

                              <input style="color:black;" type="email" class="form-control" id="email" name="emailiKerkuar">
                          </div>
                          
                          <div class="text-center">
                            <button align="middle" type="submit" class="btn btn-default">Subscribe</button>
                          </div>
                    </form>

                  <th style="color:white; vertical-align: middle; text-align: center;"><b><u>NA NDIQNI</u></b><br><br>
                      
                          <a class="facebook" href="https://www.facebook.com/palestraX"><img width="45" height="45" alt="fb"  src="http://preston.by/images/facebook_socialnetwork_20047.png"></a> <p></p>
                          <a class="instagram" href="https://www.instagram.com/palestraX"><img width="40" height="40" alt="insta" src="https://5a5a57ff32a328601212-ee0df397c56b146e91fe14be42fa361d.ssl.cf1.rackcdn.com/icon/instagram_logos_app_icon/YyepHGHDvkl1wFkUHw8Y/Instagram-v051916_200.png"></a> <p></p>
                          <a class="youtube" href="https://www.youtube.com/palestraX"><img width="43" height="43" alt="yt"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Youtube_icon.svg/600px-Youtube_icon.svg.png"></a> <p></p>
                          <a class="twitter" href="https://www.twitter.com/palestraX"><img width="43" height="43" alt="tw"  src="http://icons.iconarchive.com/icons/limav/flat-gradient-social/256/Twitter-icon.png"></a>
                  
                  <th style="color:white;vertical-align:top; text-align: center;"><b><u>KU NDODHEMI</u></b><br><br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.2868742160704!2d19.8070851154238!3d41.32437487926988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503106ce23ca25%3A0xefa6e52c8c15678f!2sRruga+Myslym+Shyri%2C+Tiran%C3%AB%2C+Albania!5e0!3m2!1sen!2s!4v1480963455345" 
            width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                          
                    
                </table>
                    
<section class="container" id="footer-bottom">
      <div class="container-inner">
                    
            <div id="copyright">
                <p style="color:white;" class="text-center"><b>&copy; Palestra X 2016. All Rights Reserved.</b></p>
                          </div>


  </footer> <!--/#footer-->


<!-- Pjesa Kryesore -->
<script>
    
    function verifiko()
    { 
      ///Nese forma behet submit pas nje refuzimi nga databaza, pastrohet gabimi i refuzimit
      var foo = jQuery( "#div_gabim" );

      if( foo.hasClass( "alert alert-danger" ) )
      {
        foo.removeClass( "alert alert-danger" );
        jQuery( "#gabim" ).text( '' );
      }


      var email = document.querySelector( "#email" ).value;
      var fjalekalimi = document.querySelector( "#fjalekalimi" ).value;

      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

      var pergjigja1 = true; // variabli qe do te kontrolloje nese emaili eshte i vlefshem apo jo
      var pergjigja2 = true; /// variabli qe do te kontrolloje nese fjalekalimi eshte i vlefshem...

      /// nese fusha emailit eshte bosh
      if( email == "" )
      {
        jQuery( "#divEmaili" ).addClass( "has-error" );

        jQuery( "#helpBlock2" ).text( "Emaili eshte i detyruar.." );

        pergjigja1 = false;
      }
      else if( !filter.test( email ) ) /// nese emaili nuk i pershtatet formes se me mesiperme
      {
        jQuery( "#divEmaili" ).addClass( "has-error" );

        jQuery( "#helpBlock2" ).text( "Email i pavlefshem..." );

        pergjigja1 = false;
      }
      else
      {
        jQuery( "#divEmaili" ).addClass( "has-success" ).removeClass( "has-error" );
        jQuery( "#helpBlock2" ).text( "" );

        pergjigja1 = true;
      }


      /// nese fusha fjalekalimit eshte bosh
      if( fjalekalimi === "" )
      { 

        jQuery( "#divFjalekalimi" ).addClass( "has-error" );

        jQuery( "#helpBlock3" ).text( "Fjalekalimi eshte i detyruar.." );

        pergjigja2 = false;
      }
      else  if( fjalekalimi.length < 4 ) /// fjalekalimi nuk duhet te jete me pak se 4 karaktere
      { 

        jQuery( "#divFjalekalimi" ).addClass( "has-error" );

        jQuery( "#helpBlock3" ).text( "Fjalekalimi duhet te kete me teper se 4 karaktere.." );

        pergjigja2 = false;
      }
      else /// fjalekalimi i vlefshem...
      {
        jQuery( "#divFjalekalimi" ).addClass( "has-success" ).removeClass( "has-error" );
        jQuery( "#helpBlock3" ).text( "" );

        pergjigja2 = true;
      }
      
      ///Heqja e mesazheve te gabimit nga forma
      if( pergjigja1 && pergjigja2 )
      {
        var v1 = jQuery( "#divFjalekalimi" );
        var v2 = jQuery( "#divEmaili" );

        if( v1.hasClass( "has-success" ) )
        {
          v1.removeClass( "has-success" );
        }

        if( v2.hasClass( "has-success" ) )
        {
          v2.removeClass( "has-success" );
        }

        if( v1.hasClass( "has-error" ) )
        {
          v1.removeClass( "has-error" );
        }

        if( v2.hasClass( "has-error" ) )
        {
          v2.removeClass( "has-error" );
        }

        jQuery( "#helpBlock3" ).text( "" );
        jQuery( "#helpBlock2" ).text( "" );
      }


      return ( pergjigja1 && pergjigja2 );
    }


    ///Funksioni qe hap formen modale te identifikimit
    function hapFormenModale()
    { 

        
        var v1 = jQuery( "#divFjalekalimi" );
        var v2 = jQuery( "#divEmaili" );

        if( v1.hasClass( "has-success" ) )
        {
          v1.removeClass( "has-success" );
        }

        if( v2.hasClass( "has-success" ) )
        {
          v2.removeClass( "has-success" );
        }

        if( v1.hasClass( "has-error" ) )
        {
          v1.removeClass( "has-error" );
        }

        if( v2.hasClass( "has-error" ) )
        {
          v2.removeClass( "has-error" );
        }

        jQuery( "#helpBlock3" ).text( "" );
        jQuery( "#helpBlock2" ).text( "" );

      jQuery( "#modalIdentifikimi" ).modal( "toggle" );
      jQuery( "#modalIdentifikimi" ).modal( "show" );
    }

    

    var autocompleteOFF = document.getElementsByTagName( "input" );
    for( var i = 0; i < autocompleteOFF.length; i++ )
    {
        autocompleteOFF[ i ].autocomplete = "off";
    }



    ///Kerkimi ne fushen e kerkimi
    function shfaqSugjerime()
    { 
        var datalist = document.getElementById( 'sugjerime' );

        ///Pastron datalisten
        while( datalist.firstChild )
        {
            datalist.removeChild( datalist.firstChild );
        }

        /// heq klasen  e errorit nga fusha
        if( jQuery( '#kerko' ).hasClass( 'has-error' ) )
        {
          jQuery( "#kerko" ).removeClass( 'has-error' );
          jQuery( '#nuk_gjendet' ).text( '' );
        }
                  

          var vlera = jQuery( "#vlera_kerkuar").val();

          var data = { vlera : vlera };


          if( vlera != '' )
          { ///Therritja ajax per te kontrolluar vleren ne databaze
            jQuery.ajax(
              {
                method: "POST",
                url: "http://localhost:1234/palestra/search_includes/autocomplete.php",
                data: data,
                success: function( pergjigje )
                {
                
                      var pergjigjet = JSON.parse( pergjigje );

                      if( pergjigjet[ 0 ] == '-1')
                      {
                            jQuery( "#kerko" ).addClass( 'has-error' );
                            jQuery( '#nuk_gjendet' ).text( 'Vlera e kerkuar nuk gjendet!' );
                      }
                      else
                      {

                          for( var i = 0; i < pergjigjet.length; i++  )
                          {
                            var option = document.createElement( 'option' );
                            option.value = pergjigjet[ i ];

                            datalist.appendChild( option );
                          }
                      }
                },///FUND success
                error: function( pergjigje )
                {
                  alert( pergjigje );
                }
              });
          }
    }


    ///Funksioni qe shfaq formen e regjistrimit ne varesi te perdoruesit
    function shfaqFormeRegjistrimi( id )
    {
        if( id == 1 )
          jQuery( '#modalRegjistrimi1' ).modal( 'show' );
        else if( id == 2 )
          jQuery( '#modalRegjistrimi2' ).modal( 'show' );


        jQuery( '#modalZgjedhje' ).modal( 'hide' );
    }




    ////Funksion i gatshem per te bere formen modale responsive
    function setModalMaxHeight(element) {
  this.$element     = $(element);  
  this.$content     = this.$element.find('.modal-content');
  var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
  var dialogMargin  = $(window).width() < 768 ? 20 : 60;
  var contentHeight = $(window).height() - (dialogMargin + borderWidth);
  var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
  var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
  var maxHeight     = contentHeight - (headerHeight + footerHeight);

  this.$content.css({
      'overflow': 'hidden'
  });
  
  this.$element
    .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
  });
}

$('#modaRegjistrimi1').on('show.bs.modal', function() {
  $(this).show();
  setModalMaxHeight(this);
});

$(window).resize(function() {
  if ($('#modalRegjistrimi1.in').length != 0) {
    setModalMaxHeight($('.modal.in'));
  }
});

  </script> <!--- FUND script -->

    <?php /// kontroll nese te dhenat jane te sakta por nuk ekzistojne ne databaze.

    if( isset( $_GET[ 'email' ] ) )
    {

        echo "<script>
          jQuery(document).ready(function()
        {
          hapFormenModale();
        });
          
          jQuery( '#email' ).val( '" .$_GET[ 'email' ] . "' );
          jQuery( '#div_gabim' ).addClass( 'alert alert-danger' );
          jQuery('#gabim').text( 'Ky perdorues nuk ekziston!' );
        </script>";
    }

 ?>


 <?php ///afishon mesazh nese vlera e kerkuar nuk gjendet ne bazen e te dhenave

    if( isset( $_GET[ 'ugjet' ] ) )
    {
      echo "<script>
    
        jQuery( '#kerko' ).addClass( 'has-error' );
        jQuery( '#nuk_gjendet' ).text( 'Vlera e kerkuar nuk gjendet!' );
        </script>
      ";
    }
  ?>


<?php ///Nese kodi i regjistrimit i anetarit eshte i gabuar...
  
  if( isset( $_GET[ 'kodi' ] ) )
  {
    $foo = $_GET[ 'kodi' ];
    echo "<script>
      
        shfaqFormeRegjistrimi( 1 );
        
        jQuery( '#kodi_a' ).val( '$foo' );
        jQuery( '#g4' ).text( 'Kod i pavlefshem!' );</script>";
          
  }
 ?>


 <?php  ///Nese kodi i regjistrimit te instruktorit eshte  i gabuar

  if( isset( $_GET[ 'kod_instruktori_pavlefshem' ] ) )
  {
    $foo = $_GET[ 'kod_instruktori_pavlefshem' ];
    echo "<script>
      
        shfaqFormeRegjistrimi( 2 );
        
        jQuery( '#kodi_i' ).val( '$foo' );
        jQuery( '#gi4' ).text( 'Kod i pavlefshem!' );</script>";
          
  }

  ?>