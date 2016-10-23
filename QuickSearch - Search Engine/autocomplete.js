 <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
         <script type="text/javascript">
            function initialize() {
                var input = document.getElementById('k');
                var options = {componentRestrictions: {country: 'ind'}};
                             
                new google.maps.places.Autocomplete(input, options);
            }
                         
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>