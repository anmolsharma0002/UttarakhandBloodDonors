/*
	*	Original script by: Anmol Sharma
	*	anmol.sds10@yahoo.com
	*	Version 3.0
	*	Modified by: Anmol Sharma

	*	Description:
	*	Inserts Countries and/or States as Dropdown List
	*	How to Use:

		In Head section:
		<script type= "text/javascript" src = "countries.js"></script>
		In Body Section:
		Select Country:   <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>
		<br/>
		City/District/State: <select name ="state" id ="state"></select>
		<script language="javascript">print_country("country");</script>	

	*
	*	
	*
*/

var country_arr = new Array("India");

var s_a = new Array();
s_a[0]="";
//s_a[1]="Andaman and Nicobar Islands|Andhra Pradesh|Arunachal Pradesh|Assam|Bihar|Chandigarh|Chhattisgarh|Dadra and Nagar Haveli|Daman and Diu|Delhi|Goa|Gujarat|Haryana|Himachal Pradesh|Jammu and Kashmir|Jharkhand|Karnataka|Kerala|Lakshadweep|Madhya Pradesh|Maharashtra|Manipur|Meghalaya|Mizoram|Nagaland|Orissa|Pondicherry|Punjab|Rajasthan|Sikkim|Tamil Nadu|Tripura|Uttar Pradesh|Uttaranchal|West Bengal";
s_a[1]="Uttarakhand";

var district_arr = new Array("Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri Garhwal","Pithoragarh","Rudraprayag","Tehri Garhwal","Uttarkashi","Udham Singh Nagar");

var c_a = new Array();
c_a[0]="";
c_a[1]="Almora|Binoli|Chaukhutia|Dwarahat|Jageshwar|Jalali|Jaurasi|Ranikhet|Someshwar";
c_a[2]="Bageshwar|Baijnath|Garur|Kanda|Kapkote|Kausani|Mankot|Sani Udiyar|Vijaypur";
c_a[3]="Auli|Badrinath|Chamoli|Gopeshwar|Gairsain|Gauchar|Govindghat|Gwaldam|Joshimath|Karnaprayag|Kulsari|Mana|Nandprayag|Saikot|Sonprayag|Vishnuprayag";
c_a[4]="Banbasa|Champawat|Lohaghat|Tanakpur";
c_a[5]="Chakrata|Clement Town|Dehradun Cantonment|Doiwala|FRI and College Area|Happy Valley|Herbertpur|Landour|Mussoorie|Pratitnagar|Ranipokhri|Raipur|Rishikesh|Sudhowala|Vikasnagar|Virbhadra";
c_a[6]="Bhagwanpur|Dhandera|Haridwar|Jhabrera|Laksar|Laldhang|Landhaura|Manglaur|Ranipur|Roorkee|Salempur|Shivalik Nagar";
c_a[7]="Betalghat|Bhimtal|Bhowali|Ghorakhal|Haldwani|Kaladhungi|Kathgodam|Khairna|Lalkuan|Motahaldu|Mukteshwar|Nainital|Ramgarh|Ramnagar";
c_a[8]="Banghat|Dogadda|Kashirampur|Kotdwar|Lansdowne|Pauri|Satpuli|Srinagar";
c_a[9]="Askot|Berinag|Chaukori|Dharchula|Dharchula|Didihat|Gangolihat|Kanalichhina|Lipulekh Pass|Munsiari|Raigarh";
c_a[10]="Augustmuni|Kedarnath|Rudraprayag";
c_a[11]="Chamba|Devprayag|Dhalwala|Dhanaulti|Gangi|Ghansali|Kanatal|Kirtinagar|Makhlanu|Muni Ki Reti|Narendra Nagar|Tehri";
c_a[12]="Barkot|Bhaironghati|Chinyalisaur|Dharasu|Dhumku|Gangotri|Maneri|Naugaon|Nelang|Palar|Sang|Uttarkashi";
c_a[13]="Jaspur|Kashipur|Bazpur|Gularbhoj|Banakhera|Gadarpur|Dineshpur|Rudrapur|Pantnagar|Kichha|Sitarganj|Nanakmatta|Khatima|Mahua Dabra|Mahua Kheda|Sultanpur Patti|Kila Khera";


function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('~Select Country~','');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('~Select State~','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function print_district(district_id, district_index){
	var option_str = document.getElementById(district_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('~Select District~','');
	option_str.selectedIndex = 0;
//	var district_arr = d_a[district_index].split("|");
	for (var i=0; i<district_arr.length; i++) {
		option_str.options[option_str.length] = new Option(district_arr[i],district_arr[i]);
	}
}

function print_city(city_id, city_index){
	var option_str = document.getElementById(city_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('~Select City~','');
	option_str.selectedIndex = 0;
	var city_arr = c_a[city_index].split("|");
	for (var i=0; i<city_arr.length; i++) {
		option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
	}
}
