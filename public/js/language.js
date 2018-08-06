$(document).ready(function() {
	var pointer = 1;
	var subposition;

    // $('#bt_tambah').click(function(event) {
    // 	var subposition;
    // 	pointer += 1;

    //     $('#form_language').append('<div class="panel panel-success">' +
				// 				        '<div class="panel-body">' +
				// 				            '<div class="row">' +
				// 				                '<div class="col-md-8">' +
				// 				                     '<div><a>Kemampuan</a></div>' +
				// 				                     '<div><input id="language1" class="form-control input-sm" type="text" name="language[]" placeholder="Language"></div>' +
				// 				                 '</div>' +

				// 				                 '<div class="col-md-3">' +
				// 				                     '<div><a>Level Kemampuan</a></div>' +
				// 				                     '<div>' +
				// 				                        '<select name="years[]" class="form-control input-sm">' +
				// 				                            '<option value="">...</option>' +
				// 				                            '<option value="1">Beginer</option>' +
				// 				                            '<option value="2">Intermediete</option>' +
				// 				                            '<option value="3">Advance</option>' +
				// 				                        '</select>' +
				// 				                    '</div>' + 
				// 				                '</div>' +

				// 				                '<div class="col-md-1">' +
				// 				                    '<div><a>&nbsp</a></div>' +
				// 				                    '<a href="#" class="btn btn-danger btn-sm" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' + 
				// 				                '</div>' + 
				// 				            '</div>' + 
				// 				        '</div>' + 
				// 				    '</div>');

    //     autocomplete(document.getElementById("position" + pointer + ""), countries);

    //     $("#position"+pointer).change(function(event) {
    //     	event.preventDefault();
    //     	subposition = ["Bali", "Jawa Timur", "Ambon"];

    //     	autocomplete(document.getElementById("subposition" + pointer + ""), subposition);
    //     });

    // });

    $("#position"+pointer).change(function(event) {
    	event.preventDefault();
    	subposition = ["Bali", "Jawa Timur", "Ambon"];

    	autocomplete(document.getElementById("subposition1"), subposition);
    });

    $("body").on('click', '#bt_hapus', function(event) {
        event.preventDefault();
        $(this).parents(':eq(3)').remove();
    });

    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

    autocomplete(document.getElementById("position"+pointer), countries);
    
});
