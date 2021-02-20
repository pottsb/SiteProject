var i = document.getElementById('total');
var f = document.getElementById('freebie');
var eh = document.getElementById('extraheader');
extras = 0
base = parseInt(i.innerHTML)

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

	function handleClick(input){
	var chk = document.querySelectorAll(".form-check-input");
	var total = 0;
		chk.forEach(function(el){
            x = document.getElementById(el.getAttribute('name'));
            if(el.getAttribute('type') == "checkbox" && el.checked && x.innerHTML == ""){
                extras += 1
            }
            if(el.getAttribute('type') == "checkbox" && !el.checked && x.innerHTML){
                extras -= 1
            }
			if (el.checked) {
                total += parseInt(el.getAttribute('value'));
                
                x.innerHTML = el.getAttribute('textdata')
			}
            if(el.getAttribute('type') == "checkbox" && !el.checked){
                
                x.innerHTML = null
            }
            if(el.getAttribute('type') == "checkbox"){

            }
		});
		i.innerHTML = numberWithCommas(base+total);
        if(extras => 1){
            eh.innerHTML = "<h6>Extras</h6>"
        }
        if(extras == 0){
            eh.innerHTML = null
        }
        if(base+total > 4000){
            if(extras == 0){
                eh.innerHTML = "<h6>Extras</h6>"
            }
            f.innerHTML = "Free Hula Girl on Dash!"
        }
        else{
            if(extras == 0){
                eh.innerHTML = null
            }
            f.innerHTML = null
        }

};

document.addEventListener("DOMContentLoaded", function() {
    handleClick();
  });

$('input[type="radio"]').on( "click", handleClick );
$('input[type="checkbox"]').on( "click", handleClick );
