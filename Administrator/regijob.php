<?php 

include("lib/config.php");





include("includes/head.php");

if(!isset($_SESSION['rid']))

{

	echo"<script>

	window.location.href='index.php';

	</script>";

	exit;

}



		

?>

<style type="text/css">



#passwordStrength

{

	height:10px;

	display:block;

	float:left;

}



.strength0

{

	width:250px;

	background:#cccccc;

}



.strength1

{

	width:50px;

	background:#ff0000;

}



.strength2

{

	width:100px;	

	background:#ff5f5f;

}



.strength3

{

	width:150px;

	background:#56e500;

}



.strength4

{

	background:#4dcd00;

	width:200px;

}



.strength5

{

	background:#399800;

	width:250px;

}



#header

{

	height:60px;

	position:fixed;

	width:100%;

	background-color:black;

	box-shadow:0px 5px 15px grey;

	-moz-box-shadow:0px 5px 15px grey;

	-webkit-box-shadow:0px 5px 15px grey;

	margin:-60px 0px 0px 0px;

	

	

}

#header ul 

{

	list-style-type:none;

	padding:0px;

	margin:0px;

	

}

#header ul li

{

	float:left;

	height:38px;

	padding-right:10px;

	text-align:center;

	padding-top:22px;

	padding-left:10px;

	

	color:white;

	font-size:16px;

	font-weight:bold;

}

#mover:hover

{

	background-color:grey;

}

#header ul li a

{

	color:white;

	text-decoration:none;

}

</style>

<script type="text/javascript" src="jquery.js"></script>



<link href="http://jobsincorporation.com/js/jquery.datepick.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://jobsincorporation.com/js/jquery.plugin.js"></script>

<script src="http://jobsincorporation.com/js/jquery.datepick.js"></script>

<script>

window.location.hash="no-back-button";

window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history

window.onhashchange=function(){window.location.hash="no-back-button";}





$(function() {

	$('#dob').datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});

$(function() {

	$('#npdate').datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});



$(function() {

	$('#ffq').datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});

$(function() {

	$('#fgq').datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});





</script>

<script type="text/javascript">







var incre=0;



$(function () {

    $("#btnAdd").bind("click", function () {

        var div = $("<div />");

        div.html(GetDynamicTextBox(""));

        $("#inner").append(div);

		         



$(function() {

	$('#fg'+incre).datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});

$(function() {

	$('#ff'+incre).datepick({ 

    yearRange: 'c-50:c+0', showTrigger: '#calImg'});	

});





				 

    });

    $("#btnGet").bind("click", function () {

        var values = "";

        $("input[name=DynamicTextBox]").each(function () {

            values += $(this).val() + "\n";

        });

        alert(values);

    });

    $("body").on("click", ".remove", function () {

        

		$(this).closest("div").remove();

		

    });

});

function GetDynamicTextBox(value) {

var dataa='';

incre++;



		      		        dataa+="<table border='1' id='asdf' width='95%' >";

							

							 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";



				

 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' id='label_caption'></td>";

dataa+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'></td><td align='left' width='1%'></td><td align='right' width='32%' id='label_caption'><input type='button' style='border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;' value='Remove' class='remove' /></td>";

dataa+="</tr>";



 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";



 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' id='label_caption'><input type='text' name='course"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z0-9+.+ .-]{2,20}' title='Please enter proper qualification' placeholder='Course Name' ></td>";

dataa+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' name='year"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9]{4,4}' title='It should be numeric' placeholder='Year of Pass' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name='grade"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z0-9+%+.+ ]{1,5}' title='Please enter proper grade or percentage' placeholder='Percentage or Grade' ></td>";

dataa+="</tr>";



 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";





 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' id='label_caption'><input type='text' id='fg"+incre+"' name='sdate"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}' title='You should follow the required format eg : MM/DD/YYYY' placeholder='Course Start Date' ></td>";

dataa+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' id='ff"+incre+"' name='edate"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}' title='You should follow the required format eg : MM/DD/YYYY' placeholder='Course End Date' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name='duration"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9a-zA-Z+ ]{1,4}' title='Please enter proper course duration' placeholder='Course Duration in Years' ></td>";

dataa+="</tr>";



 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";





 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' id='label_caption'><input type='text' name='special"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{2,10}' title='Please enter proper specialization' placeholder='Specilization' ></td>";

dataa+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' name='collegename"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{5,40}' title='Please enter proper college name' placeholder='College Name' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name='location"+incre+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{2,20}' title='Please enter proper college location' placeholder='College Location' ></td>";

dataa+="</tr>";

 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";



 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' id='label_caption' colspan='7'><select name='university"+incre+"' style='height:40px;border:1px solid lightgrey;width:100%;border-radius:3px;'><option>University</option><option>Acharya N.G. Ranga Agricultural University, Hyderabad</option><option>Acharya Nagarjuna University , Guntur</option><option>Adikavi Nannaya University, Rajahmundry</option><option>Ahmedabad University, Ahmedabad</option><option>Alagappa University, Karaikudi</option><option>Aliah University, Kolkata</option><option>Aligarh Muslim University, Aligarh</option><option>All India Institute of Medical Sciences, New Delhi</option><option>Alliance University, Bangalore</option><option>Amity University, Noida</option><option>Amrita Vishwa Vidyapeetham, Coimbatore</option><option>Anand Agricultural University, Anand</option><option>Andhra University, Visakhapatnam</option><option>Anna University, Chennai</option><option>Annamalai University, Chidambaram</option><option>Apeejay Stya University, Gurgaon</option><option>Arni University, Kathgarh</option><option>Aryabhatta Knowledge University, Patna</option><option>Assam Agricultural University, Jorhat</option><option>Assam Don Bosco University, Guwahati</option><option>Assam University, Silchar</option><option>Avinashilingam University, Coimbatore</option><option>Awadhesh Pratap Singh University, Rewa</option><option>Ayush and Health Sciences University of Chhattisgarh, Raipur</option><option>Azim Premji University, Bangalore</option><option>B.R. Ambedkar Bihar University, Muzaffarpur</option><option>B.S. Abdur Rahman University, Chennai</option><option>Baba Farid University of Health Sciences, Faridkot</option><option>Baba Ghulam Shah Badhshah University, Rajouri</option><option>Babasaheb Bhimrao Ambedkar University, Lucknow</option><option>Babu Banarasi Das University, Lucknow</option><option>Baddi University of Emerging Sciences and Technologies, Baddi</option><option>BAHRA University, Shimla</option><option>Banaras Hindu University, Varanasi</option><option>Banasthali Vidyapith, Banasthali</option><option>Bangalore University, Bangalore</option><option>Barkatullah University, Bhopal</option><option>Bastar Vishwavidyalaya, Bastar</option><option>Bengal Engineering and Science University, Howrah</option><option>Berhampur University, Berhampur</option><option>Bhagat Phool Singh Mahila Vishwavidyalaya, Khanpur Kalan</option><option>Bhagwant University, Ajmer</option><option>Bharat Ratna Dr. B.R. Ambedkar University, New Delhi</option><option>Bharathiar University, Coimbatore</option><option>Bharathidasan University, Tiruchirappalli</option><option>Bharati Vidyapeeth University, Pune</option><option>Bhatkhande Music Institute, Lucknow</option><option>Bhupendra Narayan Mandal University, Madhepura</option><option>Bidhan Chandra Krishi Vishwavidyalaya, Nadia</option><option>Biju Patnaik University of Technology, Rourkela</option><option>Birla Institute of Technology, Ranchi</option><option>Birla Institute of Technology and Science, Pilani</option><option>Birsa Agricultural University, Ranchi</option><option>Bundelkhand University, Jhansi</option><option>Calorx Teachers' University, Ahmedabad</option><option>Central Agricultural University, Imphal</option><option>Central Institute of Fisheries Education, Mumbai</option><option>Central University of Bihar, Patna</option><option>Central University of Gujarat, Gandhinagar</option><option>Central University of Haryana, Narnaul</option><option>Central University of Himachal Pradesh, Kangra</option><option>Central University of Jharkhand, Ranchi</option><option>Central University of Karnataka, Gulbarga</option><option>Central University of Kashmir, Srinagar</option><option>Central University of Kerala, Kasaragod</option><option>Central University of Orissa, Koraput</option><option>Central University of Punjab, Bathinda</option><option>Central University of Rajasthan, Dist-Ajmer</option><option>Central University of Tamil Nadu, Tiruvarur</option><option>Central University of Tibetan Studies, Varanasi</option><option>Centurion University of Technology and Management, Bhubaneswar</option><option>CEPT University, Ahmedabad </option><option>Chanakya National Law University, Patna</option><option>Chandra Shekhar Azad University of Agriculture & Technology, Kanpur</option><option>Charotar University of Science & Technology, Changa</option><option>Chaudhary Charan Singh Haryana Agricultural University, Hisar</option><option>Chaudhary Charan Singh University, Meerut</option><option>Chaudhary Devi Lal University, Sirsa</option><option>Chennai Mathematical Institute, Chennai</option><option>Chhatrapati Shahuji Maharaj Medical University, Lucknow</option><option>Chhatrapati Shahuji Maharaj University, Kanpur</option><option>Chhattisgarh Swami Vivekananda Technical University, Bhilai</option><option>Chitkara University, Chandigarh</option><option>Cochin University of Science and Technology, Kochi</option><option>CSK Himachal Pradesh Agricultural University, Palampur</option><option>Damodaram Sanjivayya National Law University, Visakhapatnam</option><option>Datta Meghe Institute of Medical Sciences, Nagpur</option><option>Davangere University, Davangere</option><option>Dayalbagh Educational Institute, Agra</option><option>Deccan College Post-Graduate an d Research Institute, Pune</option><option>Deen Dayal Upadhyay Gorakhpur University, Gorakhpur</option><option>Deenbandhu Chhotu Ram University of Science and Technology, Murthal</option><option>Delhi Technological University, Delhi</option><option>Dev Sanskriti Vishwavidyalaya, Haridwar</option><option>Devi Ahilya Vishwavidyalaya, Indore</option><option>Dharmsinh Desai University, Nadiad</option><option>Dhirubhai Ambani Institute of Information & Communication Technology, Gandhinagar</option><option>Dibrugarh University, Dibrugarh</option><option>Doon University, Dehradun</option><option>Dr K.N. Modi University, Newai</option><option>Dr. B R Ambedkar National Institute of Technology, Jalandhar</option><option>Dr. B.R. Ambedkar University, Etcherla</option><option>Dr. B.R. Ambedkar University, Agra</option><option>Dr. Babasaheb Ambedkar Marathwada University, Aurangabad</option><option>Dr. Babasaheb Ambedkar Technological University, Lonere</option><option>Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth, Dapoli</option><option>Dr. C.V. Raman University, Bilaspur</option><option>Dr. Hari Singh Gour University, Sagar</option><option>Dr. Panjabrao Deshmukh Krishi Vidyapeeth, Akola</option><option>Dr. Ram Manohar Lohia Avadh University, Faizabad</option><option>Dr. Ram Manohar Lohiya National Law University, Lucknow</option><option>Dr. Shakuntala Misra Rehabilitation University, Lucknow</option><option>Dr. Y.S. Parmar University of Horticulture and Forestry, Nauni</option><option>Dravidian University, Kuppam</option><option>EIILM University, Malabassey</option><option>Eternal University, Baru Sahib</option><option>Fakir Mohan University, Balasore</option><option>Galgotias University, Noida</option><option>Gandhi Institute of Technology and Management, Visakhapatnam</option><option>Gandhigram Rural University, Gandhigram</option><option>Ganpat University, Mehsana</option><option>Gauhati University, Guwahati</option><option>Gautam Buddha University, Greater Noida</option><option>GLA University, Chaumuhan</option><option>Goa University, Taleigao Plateau</option><option>Gokhale Institute of Politics and Economics, Pune</option><option>Govind Ballabh Pant University of Agriculture & Technology, Pantnagar</option><option>Gujarat Ayurved University, Jamnagar</option><option>Gujarat Forensic Sciences University, Gandhinagar</option><option>Gujarat National Law University, Gandhinagar</option><option>Gujarat Technological University, Ahmedabad</option><option>Gujarat University, Ahmedabad</option><option>Gujarat Vidyapith, Ahmedabad</option><option>Gulbarga University, Gulbarga</option><option>Guru Angad Dev Veterinary and Animal Sciences University, Ludhiana</option><option>Guru Ghasidas Vishwavidyalaya, Bilaspur</option><option>Guru Gobind Singh Indraprastha University, Delhi</option><option>Guru Jambheshwar University of Science & Technology, Hisar</option><option>Guru Nanak Dev University, Amritsar</option><option>Hemchandracharya North Gujarat University, Patan</option><option>Hemwati Nandan Bahuguna Garhwal University, Srinagar</option><option>Hidayatullah National Law University, Raipur</option><option>Himachal Pradesh University, Shimla</option><option>Himgiri ZEE University, Dehradun</option><option>Hindustan University, Chennai</option><option>Homi Bhabha National Institute, Mumbai</option><option>ICFAI University, Dehradun, Dehradun</option><option>ICFAI University, Jharkhand, Ranchi</option><option>ICFAI University, Tripura, Agartala</option><option>IFHE Hyderabad, Dontanapalli Village</option><option>IFTM University, Moradabad</option><option>Indian Agricultural Research Institute, New Delhi</option><option>Indian Institute of Foreign Trade, New Delhi</option><option>Indian Institute of Information Technology, Allahabad</option><option>Indian Institute of Information Technology and Management, Gwalior</option><option>Indian Institute of Information Technology,Design and Manufacturing, Chennai</option><option>Indian Institute of Science, Bangalore</option><option>Indian Institute of Space Science and Technology, Thiruvananthapuram</option><option>Indian Institute of Technology, Bhubaneswar, Bhubaneswar</option><option>Indian Institute of Technology, Bombay, Mumbai</option><option>Indian Institute of Technology, Delhi, New Delhi</option><option>Indian Institute of Technology, Gandhinagar, Chandkheda</option><option>Indian Institute of Technology, Guwahati</option><option>Indian Institute of Technology, Hyderabad, Yeddumailaram</option><option>Indian Institute of Technology, Indore, Indore</option><option>Indian Institute of Technology, Jodhpur</option><option>Indian Institute of Technology, Kanpur</option><option>Indian Institute of Technology, Kharagpur</option><option>Indian Institute of Technology, Madras, Chennai</option><option>Indian Institute of Technology, Mandi</option><option>Indian Institute of Technology, Patna</option><option>Indian Institute of Technology, Roorkee</option><option>Indian Institute of Technology, Ropar, Rupnagar</option><option>Indian Maritime University, Chennai</option><option>Indian School of Mines, Dhanbad</option><option>Indian Statistical Institute, Kolkata</option><option>Indian Veterinary Research Institute, Izatnagar</option><option>Indira Gandhi Agricultural University, Raipur</option><option>Indira Gandhi Institute of Development Research, Mumbai</option><option>Indira Gandhi National Tribal University, Amarkantak</option><option>Indira Kala Sangit Vishwavidyalaya, Khairagarh</option><option>Indraprastha Institute of Information Technology, New Delhi</option><option>Indus International University, Tehsil Haroli</option><option>Institute of Chemical Technology, Mumbai</option><option>Integral University, Lucknow</option><option>International Institute for Population Sciences, Mumbai</option><option>International Institute of Information Technology, Bangalore</option><option>International Institute of Information Technology, Hyderabad</option><option>Invertis University, Bareilly</option><option>Islamic University of Science and Technology, Pulwama</option><option>ITM University, Gurgaon</option><option>Jadavpur University, Kolkata</option><option>Jagadguru Ramanandacharya Rajasthan Sanskrit University, Jaipur</option><option>Jagan Nath University, Jaipur</option><option>Jagdishprasad Jhabarmal Tibrewala University, Jhunjhunu</option><option>Jai Narain Vyas University, Jodhpur</option><option>Jai Prakash Vishwavidyalaya, Chapra</option><option>Jain Vishva Bharati University, Ladnun</option><option>Jaipur National University, Jaipur</option><option>Jamia Hamdard, New Delhi</option><option>Jamia Millia Islamia, New Delhi</option><option>Jawaharlal Institute of Postgraduate Medical Education & Research, Puducherry</option><option>Jawaharlal Nehru Architecture and Fine Arts University, Hyderabad</option><option>Jawaharlal Nehru Centre for Advanced Scientific Research, Bangalore</option><option>Jawaharlal Nehru Krishi Vishwavidyalaya, Jabalpur</option><option>Jawaharlal Nehru Technological University, Hyderabad</option><option>Jawaharlal Nehru Technological University, Anantapur</option><option>Jawaharlal Nehru Technological University, Kakinada</option><option>Jawaharlal Nehru University, New Delhi</option><option>Jayoti Vidyapeeth Women's University, Jaipur</option><option>Jaypee University of Engineering & Technology, Raghogarh</option><option>Jaypee University of Information Technology, Waknaghat</option><option>Jiwaji University, Gwalior</option><option>Jodhpur National University, Jodhpur</option><option>JSS University,Mysore</option><option>Junagadh Agricultural University, Junagadh</option><option>K L University, Vaddeswaram</option><option>Kadi Sarva VishwaVidyalaya, Gandhinagar</option><option>Kakatiya University, Warangal</option><option>Kameshwar Singh Darbhanga Sanskrit University, Darbhanga</option><option>Kannada University, Vidyaranya</option><option>Kannur University, Kannur</option><option>Karnatak University, Dharwad</option><option>Karnataka State Law University, Hubli</option><option>Karnataka State Women's University, Bijapur</option><option>Karnataka Veterinary,Animal and Fisheries Sciences University, Bidar</option><option>Karunya University, Coimbatore</option><option>Kavikulguru Kalidas Sanskrit University, Nagpur</option><option>Kerala Agricultural University, Thrissur</option><option>Kerala Kalamandalam, Cheruthuruthy</option><option>Kerala University of Fisheries and Ocean Studies, Kochi</option><option>Kerala University of Health Sciences, Thrissur</option><option>Kerala Veterinary and Animal Sciences University, Pookode</option><option>KIIT University, Bhubaneswar</option><option>KLE University, Belgaum</option><option>Kolhan University, Chaibasa</option><option>Krantiguru Shyamji Krishna Verma Kachchh University, Bhuj</option><option>Krishna University, Machhlipattanam</option><option>Kumaun University, Nainital</option><option>Kurukshetra University, Kurukshetra</option><option>Kushabhau Thakre Patrakarita Avam Jansanchar University, Raipur</option><option>Kuvempu University, Shankaraghatta</option><option>Lakshmibai National Institute of Physical Education, Gwalior</option><option>Lalit Narayan Mithila University, Darbhanga</option><option>Lovely Professional University, Phagwara</option><option>Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya, Jabalpur</option><option>Madurai Kamaraj University, Madurai</option><option>Magadh University, Bodh Gaya</option><option>Mahamaya Technical University, Noida</option><option>Maharaja Ganga Singh University, Bikaner</option><option>Maharaja Krishnakumarsinhji Bhavnagar University, Bhavnagar</option><option>Maharana Pratap University of Agriculture and Technology, Udaipur</option><option>Maharashtra Animal and Fishery Sciences University, Nagpur</option><option>Maharashtra University of Health Sciences, Nashik</option><option>Maharishi Dayanand University, Rohtak</option><option>Maharishi Mahesh Yogi Vedic Vishwavidyalaya, Katni</option><option>Maharishi Panini Sanskrit Vishwavidyalaya, Ujjain</option><option>Maharishi University of Management and Technology, Bilaspur</option><option>Maharshi Dayanand Saraswati University, Ajmer</option><option>Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Wardha</option><option>Mahatma Gandhi Chitrakoot Gramoday Vishwavidyalaya, Chitrakoot</option><option>Mahatma Gandhi Kashi Vidyapeeth, Varanasi</option><option>Mahatma Gandhi University, Nalgonda</option><option>Mahatma Gandhi University, Tura</option><option>Mahatma Gandhi University, Kottayam</option><option>Mahatma Jyoti Rao Phoole University, Jaipur</option><option>Mahatma Jyotiba Phule Rohilkhand University, Bareilly</option><option>Mahatma Phule Krishi Vidyapeeth, Rahuri</option><option>Makhanlal Chaturvedi Rashtriya Patrakarita Vishwavidyalaya, Bhopal</option><option>Malaviya National Institute of Technology, Jaipur</option><option>Manav Bharti University, Solan</option><option>Mangalayatan University, Aligarh</option><option>Mangalore University, Mangalore</option><option>Manipal University, Manipal</option><option>Manipur University, Imphal</option><option>Manonmaniam Sundaranar University, Tirunelveli</option><option>Marathwada Agricultural University, Parbhani</option><option>Martin Luther Christian University, Shillong</option><option>MATS University, Raipur</option><option>Maulana Azad National Institute of Technology, Bhopal</option><option>Maulana Azad National Urdu University, Hyderabad</option><option>Maulana Mazharul Haque Arabic and Persian University, Patna</option><option>Mewar University, Chittorgarh</option><option>MGM Institute of Health Sciences, Navi Mumbai</option><option>Mizoram University, Aizawl</option><option>Mohammad Ali Jauhar University, Rampur</option><option>Mohanlal Sukhadia University, Udaipur</option><option>Mother Teresa Women's University, Kodaikanal</option><option>Motilal Nehru National Institute of Technology, Allahabad</option><option>Nagaland University, Kohima</option><option>NALSAR University of Law, Hyderabad</option><option>Narendra Dev University of Agriculture and Technology, Faizabad</option><option>Narsee Monjee Institute of Management and Higher Studies, Mumbai</option><option>National Dairy Research Institute, Karnal</option><option>National Institute of Design, Ahmedabad</option><option>National Institute of Fashion Technology, New Delhi</option><option>National Institute of Mental Health and Neuro Sciences, Bangalore</option><option>National Institute of Pharmaceutical Education and Research, Mohali</option><option>National Institute of Pharmaceutical Education and Research, Ahmedabad</option><option>National Institute of Pharmaceutical Education and Research, Guwahati</option><option>National Institute of Pharmaceutical Education and Research, Hajipur</option><option>National Institute of Pharmaceutical Education and Research, Hyderabad</option><option>National Institute of Pharmaceutical Education and Research, Kolkata</option><option>National Institute of Pharmaceutical Education and Research, Rae Bareli</option><option>National Institute of Technology, Calicut</option><option>National Institute of Technology, Karnataka</option><option>National Institute of Technology, Raipur</option><option>National Institute of Technology, Agartala</option><option>National Institute of Technology, Durgapur</option><option>National Institute of Technology, Hamirpur</option><option>National Institute of Technology, Jamshedpur</option><option>National Institute of Technology, Kurukshetra</option><option>National Institute of Technology, Patna</option><option>National Institute of Technology, Rourkela</option><option>National Institute of Technology, Silchar</option><option>National Institute of Technology, Srinagar</option>	<option>National Institute of Technology, Tiruchirappalli</option>	<option>National Institute of Technology, Warangal</option><option>National Law Institute University, Bhopal</option><option>National Law School of India University, Bangalore</option><option>National Law University, New Delhi</option><option>National Law University, Jodhpur</option><option>National Law University, Orissa, Cuttack</option><option>National University of Educational Planning and Administration, New Delhi</option><option>National University of Study and Research in Law, Ranchi</option><option>Navsari Agricultural University, Navsari</option><option>Netaji Subhas Institute of Technology, New Delhi</option><option>Nilamber-Pitamber University, Medininagar</option><option>NIMS University, Jaipur</option><option>Nirma University of Science and Technology, Ahmedabad</option><option>NITTE University, Mangalore</option><option>Nizam's Institute of Medical Sciences, Hyderabad</option><option>Noida International University, Greater Noida</option><option>North Eastern Hill University, Shillong</option><option>North Eastern Regional Institute of Science and Technology, Itanagar</option><option>North Maharashtra University, Jalgaon</option><option>North Orissa University, Baripada</option><option>NTR University of Health Sciences, Vijayawada</option><option>O.P. Jindal Global University, Sonepat</option><option>Orissa University of Agriculture and Technology, Bhubaneswar</option><option>Osmania University, Hyderabad</option><option>Pacific University, Udaipur</option><option>Padmashree Dr. D.Y. Patil Vidyapith, Navi Mumbai</option><option>Palamuru University, Mahboobnagar</option><option>Pandit Deendayal Petroleum University, Gandhinagar</option><option>Pandit Ravishankar Shukla University, Raipur</option><option>Panjab University, Chandigarh</option><option>Patna University, Patna</option><option>PDPM Indian Institute of Information Technology, Design & Manufacturing, Jabalpur</option><option>PEC University of Technology, Chandigarh</option><option>Periyar Maniammai University, Vallam</option><option>Pondicherry University, Puducherry</option><option>Post Graduate Institute of Medical Education and Research, Chandigarh</option><option>Potti Sreeramulu Telugu University, Hyderabad</option><option>Pravara Institute of Medical Sciences, Loni</option><option>Presidency University, Kolkata</option><option>Pt. B. D. Sharma University of Health Sciences, Rohtak</option><option>Punjab Agricultural University, Ludhiana</option><option>Punjab Technical University, Jalandhar</option><option>Punjabi University, Patiala</option><option>Rabindra Bharati University, Kolkata</option><option>Raffles University, Neemrana</option><option>Rajasthan Agricultural University, Bikaner</option><option>Rajasthan Ayurved University, Jodhpur</option><option>Rajasthan Technical University, Kota</option><option>Rajasthan University of Health Sciences, Jaipur</option><option>Rajendra Agricultural University, Samastipur</option><option>Rajiv Gandhi National University of Law, Patiala</option><option>Rajiv Gandhi Proudyogiki Vishwavidyalaya, Bhopal</option><option>Rajiv Gandhi University, Itanagar</option><option>Rajiv Gandhi University of Health Sciences, Bangalore</option><option>Ramakrishna Mission Vivekananda University, Belur</option><option>Ranchi University, Ranchi</option><option>Rani Channamma University, Belagavi</option><option>Rani Durgavati Vishwavidyalaya, Jabalpur</option><option>Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur</option><option>Rashtriya Sanskrit Sansthan, New Delhi</option><option>Rashtriya Sanskrit Vidyapeetha, Tirupati</option><option>Ravenshaw University, Cuttack</option><option>Rayalaseema University, Kurnool</option><option>Sam Higginbottom Institute of Agriculture, Technology and Sciences, Allahabad</option><option>Sambalpur University, Burla</option><option>Sampurnanand Sanskrit Vishvavidyalaya, Varanasi</option><option>Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow</option><option>Sant Gadge Baba Amravati University, Amravati</option><option>Sant Longowal Institute of Engineering and Technology, Sangrur</option><option>Sardar Patel University, Vallabh Vidyanagar</option><option>Sardar Vallabhbhai National Institute of Technology, Surat </option><option>Sardar Vallabhbhai Patel University of Agriculture and Technology, Meerut</option><option>Sardarkrushinagar Dantiwada Agricultural University, Palanpur</option><option>Sarguja University, Ambikapur</option><option>SASTRA University, Thanjavur</option><option>Satavahana University, Karimnagar</option><option>Sathyabama University, Chennai</option><option>Saurashtra University, Rajkot</option><option>School of Planning and Architecture, Delhi</option><option>Sharda University, Greater Noida</option><option>Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir, Srinagar</option><option>Shiv Nadar University, Tehsil Dadri</option><option>Shivaji University, Kolhapur</option><option>Shoolini University of Biotechnology and Management Sciences, Solan</option><option>Shree Somnath Sanskrit University, Junagadh</option><option>Shreemati Nathibai Damodar Thackersey Women's University, Mumbai</option><option>Shri Guru Ram Rai Education Mission, Dehradun</option><option>Shri Jagannath Sanskrit Vishvavidyalaya, Puri</option><option>Shri Lal Bahadur Shastri Rashtriya Sanskrit Vidyapeetha, New Delhi</option><option>Shri Mata Vaishno Devi University, Jammu</option><option>Shri Venkateshwara University, Gajraula</option><option>Shridhar University, Pilani</option><option>Sidho Kanho Birsha University, Kolkata</option><option>Sido Kanhu Murmu University, Dumka</option><option>Sikkim Manipal University, Tadong</option><option>Sikkim University, Tadong</option><option>Singhania University, Jhunjhunu</option><option>Sir Padampat Singhania University, Udaipur</option><option>South Asian University, New Delhi</option><option>Sree Chitra Thirunal Institute of Medical Sciences and Technology, Thiruvananthapuram</option><option>Sree Sankaracharya University of Sanskrit, Kalady</option><option>Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya, Kanchipuram</option><option>Sri Guru Granth Sahib World University, Fatehgarh Sahib</option><option>Sri Krishnadevaraya University, Anantapur</option><option>Sri Padmavati Mahila Visvavidyalayam, Tirupati</option><option>Sri Ramachandra University, Chennai</option><option>Sri Sai University, Palampur</option><option>Sri Venkateswara Institute of Medical Sciences, Tirupati</option><option>Sri Venkateswara University, Tirupati</option><option>Sri Venkateswara Vedic University, Tirupati</option><option>Sri Venkateswara Veterinary University, Tirupati</option><option>SRM University, Kattankulathur</option><option>Subharti University, Meerut</option><option>SunRise University, Alwar</option><option>Suresh Gyan Vihar University, Jaipur</option><option>Swami Ramanand Teerth Marathwada University, Nanded</option><option>Symbiosis International University, Pune</option><option>Tamil Nadu Agricultural University, Coimbatore</option><option>Tamil Nadu Dr Ambedkar Law University, Chennai</option><option>Tamil Nadu Dr. M.G.R.Medical University, Chennai</option><option>Tamil Nadu Physical Education and Sports University, Chennai</option><option>Tamil Nadu Teacher Education University, Chennai</option><option>Tamil Nadu Veterinary and Animal Sciences University, Chennai</option><option>Tamil University, Thanjavur</option><option>Tata Institute of Fundamental Research, Mumbai</option><option>Tata Institute of Social Sciences, Mumbai</option><option>Teerthanker Mahaveer University, Moradabad</option><option>Telangana University, Nizamabad</option><option>TERI University, New Delhi</option><option>Tezpur University, Tezpur</option><option>Thapar University, Patiala</option><option>The English and Foreign Languages University, Hyderabad</option><option>The Indian Law Institute, New Delhi</option><option>The LNM Institute of Information Technology, Jaipur</option><option>The Maharaja Sayajirao University of Baroda, Vadodara</option><option>The National University of Advanced Legal Studies, Kochi</option><option>The WB National University of Juridical Sciences, Kolkata</option><option>Thiruvalluvar University, Vellore</option><option>Tilka Manjhi Bhagalpur University, Bhagalpur</option><option>Tripura University, Tripura</option><option>Tumkur University, Tumkur</option><option>University of Agricultural Sciences, Bangalore</option><option>University of Agricultural Sciences, Dharwad</option><option>University of Allahabad, Allahabad</option><option>University of Burdwan, Bardhaman</option><option>University of Calcutta, Kolkata</option><option>University of Calicut, Tenhipalam</option><option>University of Delhi, Delhi</option><option>University of Gour, Banga, Malda</option><option>University of Hyderabad, Hyderabad</option><option>University of Jammu, Jammu, Tawi</option><option>University of Kalyani, Kalyani</option><option>University of Kashmir, Srinagar</option><option>University of Kerala, Thiruvananthapuram</option><option>University of Kota, Kota</option><option>University of Lucknow, Lucknow</option><option>University of Madras, Chennai</option><option>University of Mumbai, Mumbai</option><option>University of Mysore, Mysore</option><option>University of North Bengal, Siliguri</option><option>University of Petroleum and Energy Studies, Dehradun</option><option>University of Pune, Pune</option><option>University of Rajasthan, Jaipur</option><option>University of Science and Technology, Meghalaya, Baridua</option><option>University of Solapur, Solapur</option><option>University of Technology & Management, Shillong</option><option>Utkal University, Bhubaneswar</option><option>Utkal University of Culture, Bhubaneswar</option><option>Uttar Banga Krishi Viswavidyalaya, Pundibari</option><option>Uttar Pradesh Technical University, Lucknow</option><option>Uttarakhand Technical University, Dehradun</option><option>Uttaranchal Sanskrit University, Haridwar</option><option>Veer Bahadur Singh Purvanchal University, Jaunpur</option><option>Veer Kunwar Singh University, Arrah</option><option>Veer Narmad South Gujarat University, Surat</option><option>Veer Surendra Sai University of Technology, Sambalpur</option><option>Vel Tech Dr.RR & Dr.SR Technical University, Chennai</option><option>Vidyasagar University, Midnapore</option><option>Vijayanagara Sri Krishnadevaraya University, Bellary</option><option>Vikram University, Ujjain</option><option>Vikrama Simhapuri University, Nellore</option><option>Vinayaka Missions Sikkim University, Gangtok</option><option>Vinoba Bhave University, Hazaribag</option><option>Visva Bharati University, Santiniketan</option><option>Visvesvaraya National Institute of Technology, Nagpur</option><option>Visvesvaraya Technological University, Belgaum</option><option>VIT University, Vellore</option><option>West Bengal State University, Barasat</option><option>West Bengal University of Animal and Fishery Sciences, Kolkata</option><option>West Bengal University of Health Sciences, Kolkata</option><option>West Bengal University of Technology, Kolkata</option><option>YMCA University of Science and Technology, Faridabad</option><option>Yogi Vemana University, Kadapa</option></select></td>";

dataa+="</tr>";

 dataa+="<tr id='rr' >";

dataa+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataa+="</tr>";



dataa+="</table>";







	



    return dataa;

            

}















var incree=0;



$(function () {

    $("#btnAdde").bind("click", function () {

        var div = $("<div />");

        div.html(GetDynamicTextBoxe(""));

        $("#innere").append(div);

		                      new JsDatePick({

			useMode:2,

			target:"dooj"+incre,

			dateFormat:"%d-%M-%Y"

					});

					       new JsDatePick({

			useMode:2,

			target:"dool"+incre,

			dateFormat:"%d-%M-%Y"

					});

    });

    $("#btnGete").bind("click", function () {

        var values = "";

        $("input[name=DynamicTextBox]").each(function () {

            values += $(this).val() + "\n";

        });

        alert(values);

    });

    $("body").on("click", ".removee", function () {

        

		$(this).closest("div").remove();

		

    });

});

function GetDynamicTextBoxe(value) {

var dataae='';

incree++;



		      		        dataae+="<table border='1' id='asdf' width='95%' >";

							 dataae+="<tr id='rr' >";

dataae+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataae+="</tr>";



				

 dataae+="<tr id='rr' >";

dataae+="<td align='left' width='33%' id='label_caption'></td>";

dataae+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'></td><td align='left' width='1%'></td><td align='right' width='32%' id='label_caption'><input type='button' style='border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;' value='Remove' class='removee' /></td>";

dataae+="</tr>";





 dataae+="<tr id='rr' >";

dataae+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataae+="</tr>";





 dataae+="<tr id='rr' >";

dataae+="<td align='left' width='33%' id='label_caption'><input type='text' name='certificate"+incree+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z0-9+&+:+ .-]{2,20}' title='Please enter proper certification name' placeholder='Certification Name' ></td>";

dataae+="<td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' name='yearcert"+incree+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9]{4,4}' title='It should be numeric' placeholder='Year of Pass' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name='percentage"+incree+"' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z0-9+%]{1,5}' title='Please enter proper grade or percentage' placeholder='Percentage or Grade' ></td>";

dataae+="</tr>";

 dataae+="<tr id='rr' >";

dataae+="<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>";

dataae+="</tr>";





dataae+="</table>";







	



    return dataae;

            

}













    function city_change(v) {

        var re = /Other/;

        if (re.test(v)) {

            document.getElementById('new_city').style.display = "block";

            document.getElementById('hc2').value = 1;

        }

        else {

            document.getElementById('new_city').style.display = "none";

            //document.getElementById('other_city').value="";

            document.getElementById('hc2').value = 0;

        }

    }



    function change_country(c) {

        if (c != '1') {

            document.getElementById('new_city').style.display = "block";

            document.getElementById('city').value = "";

            document.getElementById('city').options[document.getElementById('city').selectedIndex].text = "Select";

            document.getElementById('city').disabled = true;

            //document.getElementById('other_city').value="";

            document.getElementById('hc1').value = 1;

        }

        else {

            document.getElementById('new_city').style.display = "none";

            document.getElementById('city').disabled = false;

            document.getElementById('hc1').value = 0;

        }

    }





    function forgotview() {



        if (document.getElementById('light').style.display == 'none') {

            document.getElementById('light').style.display = 'block';

            document.getElementById('fade').style.display = 'block';

        }

        else {

            document.getElementById('light').style.display = 'none';

            document.getElementById('fade').style.display = 'none';

            //return;		

        }

    }	





</script>

<script>



    function email_val(val) {

        //alert(val);

        var email = val;

        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (email == "") {

            document.getElementById("emailInfo").innerHTML = '<font color="red"><i>Enter the Email id</i></font>';

            document.getElementById('email').focus();

            return false;

        }

        else if (re.test(document.getElementById('email').value) == false) {

            document.getElementById("emailInfo").innerHTML = '<font color="red"><i>invalid</i></font>';

            document.getElementById('email').value = "";

            document.getElementById('email').focus();

            //alert("Invalid email id");

            /*document.patientFrm.email.focus();*/

            return false;

        }

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                //alert(xmlhttp.responseText);

                if (xmlhttp.responseText == 0) {

                    document.getElementById("emailInfo").innerHTML = "<font color='red' style='font-size:12px;'>Eamil ID Already Exists !!! <a href='forgot_password.php' style='color:#000066; font-weight:bold;'> Forgot Password</a></font>";

                    document.getElementById('email').value = "";

                    document.getElementById('email').focus();



                }

                else {

                    document.getElementById("emailInfo").innerHTML = "<font color='#009966' style='font-size:12px;'>Email Id is available</font>";

                }

            }

        }

        xmlhttp.open("GET", "email.php?q=" + val, true);

        xmlhttp.send();



    }









</script>



<script>



    function username_val(val) {

        //alert(val);

        var username = val;

        //var re=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  

        if (username == "") {

            document.getElementById("usernameInfo").innerHTML = '<font color="red"><i>Enter the username </i></font>';

            document.getElementById('username').focus();

            return false;

        }

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                //alert(xmlhttp.responseText);

                if (xmlhttp.responseText == 0) {

                    document.getElementById("usernameInfo").innerHTML = "<font color='red' style='font-size:12px;'>Username Already Exists !!!</font>";

                    document.getElementById('username').value = "";

                    document.getElementById('username').focus();



                }

                else {

                    document.getElementById("usernameInfo").innerHTML = "<font color='#009966' style='font-size:12px;'>Username is available</font>";

                }

            }

        }

        xmlhttp.open("GET", "username.php?q=" + val, true);

        xmlhttp.send();

    }



</script>





	<link rel="stylesheet" type="text/css" href="tcal.css" />

	<script type="text/javascript" src="tcal.js"></script> 

	

<script>



    //-------------------------Ajax loading for states-------------//

    function loadXMLDoc(val) {

        //alert(val);

      //  document.getElementById('countryinfo').innerHTML = '<img src="images/loading.gif" />';

        var xmlhttp;

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                document.getElementById("state").innerHTML = xmlhttp.responseText;

                //document.getElementById('countryinfo').innerHTML = '';

            }

        }

        xmlhttp.open("GET", "state_ajax.php?country=" + val, true);

        xmlhttp.send();

    }



    //--------------------------Ajax Loading for Cities--------------//

    function loadcity(cityval) {

        //alert(cityval);

        //document.getElementById('stateinfo').innerHTML = '<img src="images/loading.gif" />';

        var xmlhttp;

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 

			{

                document.getElementById("city").innerHTML = xmlhttp.responseText;

               // document.getElementById('stateinfo').innerHTML = '';

            }

        }

        xmlhttp.open("GET", "city_ajax.php?city=" + cityval, true);

        xmlhttp.send();

    }

	

	

	

	

	

    //-------------------------Ajax loading for states-------------//

    function ploadXMLDoc(val) {

        //alert(val);

        //document.getElementById('pcountryinfo').innerHTML = '<img src="images/loading.gif" />';

        var xmlhttp;

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                document.getElementById("pstate").innerHTML = xmlhttp.responseText;

               // document.getElementById('pcountryinfo').innerHTML = '';

            }

        }

        xmlhttp.open("GET", "state_ajax.php?countryy=" + val, true);

        xmlhttp.send();

    }



    //--------------------------Ajax Loading for Cities--------------//

    function ploadcity(cityval) {

        //alert(cityval);

        //document.getElementById('pstateinfo').innerHTML = '<img src="images/loading.gif" />';

        var xmlhttp;

        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

            xmlhttp = new XMLHttpRequest();

        }

        else {// code for IE6, IE5

            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 

			{

                document.getElementById("pcity").innerHTML = xmlhttp.responseText;

                //document.getElementById('pstateinfo').innerHTML = '';

            }

        }

        xmlhttp.open("GET", "city_ajax.php?cityy=" + cityval, true);

        xmlhttp.send();

    }

	

	

</script> 



<script type="text/javascript" language="javascript">



    /*function trim(s) 

    { 

    var l=0; var r=s.length -1; 

    while(l < s.length && s[l] == ' ') 

    {     l++; } 

    while(r > l && s[r] == ' ') 

    {     r-=1;     } 

    return s.substring(l, r+1); 

    }*/





    function LTrim(str) {

        var whitespace = new String(" \t\n\r");

        var s = new String(str);

        if (whitespace.indexOf(s.charAt(0)) != -1) {

            // We have a string with leading blank(s)...

            var j = 0, i = s.length;

            // Iterate from the far left of string until we

            // don't have any more whitespace...

            while (j < i && whitespace.indexOf(s.charAt(j)) != -1)

                j++;

            // Get the substring from the first non-whitespace

            // character to the end of the string...

            s = s.substring(j, i);

        }

        return s;

    }



    function RTrim(str) {

        // We don't want to trip JUST spaces, but also tabs,

        // line feeds, etc.  Add anything else you want to

        // "trim" here in Whitespace

        var whitespace = new String(" \t\n\r");

        var s = new String(str);

        if (whitespace.indexOf(s.charAt(s.length - 1)) != -1) {

            // We have a string with trailing blank(s)...	

            var i = s.length - 1;       // Get length of string	

            // Iterate from the far right of string until we

            // don't have any more whitespace...

            while (i >= 0 && whitespace.indexOf(s.charAt(i)) != -1)

                i--;

            // Get the substring from the front of the string to

            // where the last non-whitespace character is...

            s = s.substring(0, i + 1);

        }

        return s;

    }



    function trim(str) {

        return RTrim(LTrim(str));

    }





    function norm_user_validation() {

        var nusername = document.normalreg.nusername.value;



        var npassword = document.normalreg.npassword.value;



        var nconfirmpassword = document.normalreg.nconfirmpassword.value;



        var nyourname = trim(document.normalreg.nyourname.value);



        var nemail = document.normalreg.nemail.value;



        //var nlandline_number = document.normalreg.nlandline_number.value;



        var nmobile_number = document.normalreg.nmobile_number.value;





        var nreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;



        var y = 0; var x = 0;





        if (nusername == '' || nusername == null) {

            alert("Enter Username");

            document.normalreg.nusername.focus();

            return false;

        }



        else if (npassword == '' || npassword == null) {



            alert("Enter Password");

            document.normalreg.npassword.focus();

            return false;



        }



        else if (npassword.length < 6) {



            alert("Password is Too Short");

            document.normalreg.npassword.focus();

            return false;



        }



        else if (nconfirmpassword == '' || nconfirmpassword == null) {



            alert("Enter the Confirm Password");

            document.normalreg.nconfirmpassword.focus();

            return false;



        }



        else if (nconfirmpassword.length < 6) {



            alert("Password is Too Short");

            document.normalreg.nconfirmpassword.focus();

            return false;



        }



        else if (npassword != nconfirmpassword) {



            alert("Password does not Match");

            document.normalreg.npassword.focus();

            return false;



        }

        else if (nyourname == '' || nyourname == null) {



            alert("Enter Your name");

            document.normalreg.nyourname.focus();

            return false;



        }



        else if (nemail == '' || nemail == null) {



            alert("Enter the Email");

            document.normalreg.nemail.focus();

            return false;



        }



        else if (nreg.test(nemail) == false) {

            alert('Invalid Email Address');

            document.normalreg.nemail.focus();

            return false;

        }

        else if (nmobile_number == '' || nmobile_number == null) {



            alert("Enter the Mobile No");

            document.normalreg.nmobile_number.focus();

            return false;



        }





        else if (document.normalreg.nterms.checked == false) {

            alert("Accept Our Terms and Conditions");

            return false;

        }



        return true;

    }





    function check_dob(val) {

        var currentDate = new Date();

        var cday = currentDate.getDate();

        var cmonth = currentDate.getMonth() + 1;

        if (cmonth < 10) {

            cmonth = "0" + cmonth;

        }

        var cyear = currentDate.getFullYear();

        var newtoday = cmonth + "/" + cday + "/" + cyear;

        var cyearless = cyear - 18;

        var sptdate = val.split("/");



        if (newtoday == val || sptdate[2] > cyearless) {

            document.register.dob.value = '';

            document.register.dob.focus();

            alert("Please enter the valid date");

        }



    }



    //Form validation starts here



	

	function pschk()

	{

		    var passwordd = document.register.password.value;

        if (passwordd == '' || passwordd == null) {

            alert("Enter Password");

            document.register.password.focus();

            return false;

        }



        else if (passwordd.length < 6) {

            alert("Password is Too Short");

            document.register.password.focus();

            return false;

        }



	}

    function user_validation() {



        var username = document.register.username.value;

        if (username == '' || username == null) {

            alert("Enter Username");

            document.register.username.focus();

            return false;

        }

        if (username != '' && username.length < 6) {

            alert("Username must be six minimum charecters");

            document.register.username.focus();

            return false;

        }



        var password = document.register.password.value;

        if (password == '' || password == null) {

            alert("Enter Password");

            document.register.password.focus();

            return false;

        }



        else if (password.length < 6) {

            alert("Password is Too Short");

            document.register.password.focus();

            return false;

        }



        var confirmpassword = document.register.confirmpassword.value;

        if (confirmpassword == '' || confirmpassword == null) {

            alert("Enter the Confirm Password");

            document.register.confirmpassword.focus();

            return false;

        }



        if (password != confirmpassword) {

            alert("Password does not Match");

            document.register.confirmpassword.focus();

            return false;

        }

/*

        var yourname = trim(document.register.yourname.value);

        if (yourname == '' || yourname == null) {

            alert("Enter Your name");

            document.register.yourname.focus();

            return false;

        }*/



        var email = document.register.email.value;



        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (email == '' || email == null) {

            alert("Enter the Email");

            document.register.email.focus();

            return false;

        }

        if (reg.test(email) == false) {

            alert('Invalid Email Address');

            document.register.email.focus();

            return false;

        }



        var email_sts = document.register.email_sts.value;



        var currentDate = new Date();

        var cday = currentDate.getDate();

        var cmonth = currentDate.getMonth() + 1;

        if (cmonth < 10) {

            cmonth = "0" + cmonth;

        }

        var cyear = currentDate.getFullYear();

        var newtoday = cmonth + "/" + cday + "/" + cyear;

        var dob = document.register.dob.value;



        if (dob == "" || dob == null) {

            alert("Please enter you date of birth");

            document.register.dob.focus();

            return false;

        }



        if (newtoday == dob) {

            alert("Please enter the valid date");

            document.register.dob.value = '';

            document.register.dob.focus();

            return false;

        }

/*

        var country = document.register.select_country.value;

        if (country == '' || country == null) {

            alert("Select Your country");

            document.register.select_country.focus();

            return false;

        }



        var state = document.register.state.value;

        if (state == '' || state == null) {

            alert("Select Your state");

            document.register.state.focus();

            return false;

        }



        var city = document.register.city.value;

        if (city == '' || city == null) {

            alert("Select Your city");

            document.register.city.focus();

            return false;

        }

*/

        var mobile_number = document.register.mobile_number.value;

        if (mobile_number == '' || mobile_number == null) {

            alert("Enter the Mobile No");

            document.register.land_countrycode.focus();

            return false;

        }

/*

        var ug = document.register.basic_grad.value;

        var ug_spec = document.getElementById('basic_grad_spec').value;

        var ugclgname = document.getElementById('ugclgname').value;

        var ugclgloc = document.getElementById('ugclgloc').value

        if (ug == 0 || ug == 1) {

            alert("Enter the basic graduation");

            document.register.basic_grad.focus();

            return false;

        }



        if (ug != 0 && ug != 1 && (ug_spec == '' || ug_spec == 'Specilization')) {

            alert("Enter the basic graduation specialization");

            document.getElementById('basic_grad_spec').focus();

            return false;

        }



        if (ug != 0 && ug != 1 && (ugclgname == '' || ugclgname == 'College name')) {

            alert("Enter the graduation college name");

            document.getElementById('ugclgname').focus();

            return false;

        }



        if (ug != 0 && ug != 1 && (ugclgloc == '' || ugclgloc == 'College location')) {

            alert("Enter the place of graduation");

            document.getElementById('ugclgloc').focus();

            return false;

        }



        var experience = document.register.year.value;

        var month = document.register.month.value;

        if (experience == '' && month == '') {

            alert("Enter the experience");

            document.register.year.focus();

            return false;

        }



        var curr_industry = document.register.curr_industry.value;

        if (curr_industry == '' || curr_industry == null) {

            alert("Enter the Current Industry");

            document.register.curr_industry.focus();

            return false;

        }



        var function_area = document.register.function_area.value;

        if (function_area == '' || function_area == null) {

            alert("Enter the Functional Area");

            document.register.function_area.focus();

            return false;

        }

		

		var notic = document.register.notice.value;

        if (notic == 'select') {

            alert("Enter the Notice Period");

            document.register.notice.focus();

            return false;

        }



        var keyskills = document.register.keyskills.value;

        if (keyskills == '' || keyskills == null) {

            alert("Enter the keyskills");

            document.register.keyskills.focus();

            return false;

        }



        var res_title = document.register.res_title.value;

        if (res_title == '' || res_title == null) {

            alert("Enter the resume head line");

            document.register.res_title.focus();

            return false;

        }



        if (document.register.terms.checked == false) {

            alert("Accept Our Terms and Conditions");

            return false;

        }*/



        return true;

    }





    function checkIt(evt) {

        evt = (evt) ? evt : window.event

        var charCode = (evt.which) ? evt.which : evt.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {

            status = "This field accepts numbers only."

            return false

        }

        status = "";

        return true

    }







    function file_upload(upload_field) {

        var re_text = /\.pdf|\.doc|\.docx/i;



        var filename = upload_field.value;



        if (filename.search(re_text) == -1) {

            alert("File does not have (doc, docx and pdf) extension");



            //      upload_field.register.reset();



            //  		upload_field.value = '' ;



            document.getElementById('fupload').value = "";



            return false;

        }



        return true;



    }





    function photo_upload(upload) {

        var re_text = /\.jpg|\.png|\.gif|\.jpeg/i;



        var filename = upload.value;



        if (filename.search(re_text) == -1) {

            alert("Image does not have Image(jpg, gif, png) extension");



            //      upload.register.reset();



            // 	  upload.value;



            document.getElementById('nusr_photo').value = "";



            return false;

        }



        return true;

    }



    function ugspec(v) {

        document.getElementById('basic_grad_spec').value = "";

        if (v != 1 && v != 0) {

            document.getElementById('basic_grad_spec').style.display = "block";

            document.getElementById('basic_txt1').style.display = "block";

            document.getElementById('basic_txt').style.display = "block";

            document.getElementById('basic_grad_spec').style.color = '#000000';

            document.getElementById('basic_txt').focus();

        }

        else {

            document.getElementById('basic_grad_spec').style.display = "none";

            document.getElementById('basic_txt1').style.display = "none";

            document.getElementById('basic_txt').style.display = "none";

        }

    }



    function pgspec(v) {

        document.getElementById('post_grad_spec').value = "";



        if (v != 0 && v != document.getElementById('hidnot_pggrad').value) {

            document.getElementById('post_grad_spec').style.display = "block";

            document.getElementById('pg_txt1').style.display = "block";

            document.getElementById('post_txt').style.display = "block";

            document.getElementById('post_grad_spec').style.color = '#000000';

            document.getElementById('post_grad_spec').focus();

        }

        else {

            document.getElementById('post_txt').style.display = "none";

            document.getElementById('pg_txt1').style.display = "none";

            document.getElementById('post_grad_spec').style.display = "none";

        }

    }



    function doctspec(v) {

        document.getElementById('doct_spec').value = "";

        if (v != 0 && v != document.getElementById('hidnot_postpggrad').value) {

            document.getElementById('doct_txt').style.display = "block";

            document.getElementById('doct_spec').style.display = "block";

            document.getElementById('postpg_txt1').style.display = "block";

            document.getElementById('doct_spec').style.color = '#000000';

            document.getElementById('doct_spec').focus();

        }

        else {

            document.getElementById('doct_txt').style.display = "none";

            document.getElementById('postpg_txt1').style.display = "none";

            document.getElementById('doct_spec').style.display = "none";

        }

    }



    function alpha(e) {

        var k;

        document.all ? k = e.keyCode : k = e.which;

        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32);

    }







    function rmv_space(val) {

        //alert(window.event.keyCode);

        if (window.event.keyCode != 32 && window.event.keyCode != 64)

            return true;

        else

            return false;

    }







function passwordStrength(password)

{



	var desc = new Array();

	desc[0] = "Very Weak";

	desc[1] = "Weak";

	desc[2] = "Better";

	desc[3] = "Medium";

	desc[4] = "Strong";

	desc[5] = "Strongest";



	var score   = 0;



	//if password bigger than 6 give 1 point

	if (password.length > 6) score++;



	//if password has both lower and uppercase characters give 1 point	

	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;



	//if password has at least one number give 1 point

	if (password.match(/\d+/)) score++;



	//if password has at least one special caracther give 1 point

	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;



	//if password bigger than 12 give another 1 point

	if (password.length > 12) score++;



	 document.getElementById("passwordDescription").innerHTML = desc[score];

	 document.getElementById("passwordStrength").className = "strength" + score;

}







function yesr()

{

	document.getElementById('r3').style.display='block';

	

}

function yesn()

{

	document.getElementById('r3').style.display='none';

	

	

}



function offers()

{

	var sa=document.getElementById('of').value;

	if(sa=="0")

	{

		document.getElementById('w3').style.display='none';

		

	

	}

	else

	{

		document.getElementById('w3').style.display='block';

		

		

	}

}

function chkad()

{

	if(document.getElementById('ch').checked)

	{

		document.getElementById('adds').style.display='none';

	}

	else

	{

		

		document.getElementById('adds').style.display='block';

	}

}



function mn1()

{

	document.getElementById('i1').style.display='none';

	document.getElementById('i11').style.display='block';

	document.getElementById('scs1').style.display='none';

	

	

	

}

function mn11()

{

	document.getElementById('i1').style.display='block';

	document.getElementById('i11').style.display='none';

	document.getElementById('scs1').style.display='block';

	

	

}





function mn2()

{

	document.getElementById('i2').style.display='none';

	document.getElementById('i22').style.display='block';

	document.getElementById('scs').style.display='none';

	

	

}

function mn22()

{

	document.getElementById('i2').style.display='block';

	document.getElementById('i22').style.display='none';

	document.getElementById('scs').style.display='block';

	

	

}



function mn3()

{

	document.getElementById('i3').style.display='none';

	document.getElementById('i33').style.display='block';

	document.getElementById('scs2').style.display='none';

	

	

}

function mn33()

{

	document.getElementById('i3').style.display='block';

	document.getElementById('i33').style.display='none';

	document.getElementById('scs2').style.display='block';

	

	

}





function mn3aq()

{

	document.getElementById('i3aq').style.display='none';

	document.getElementById('i33aq').style.display='block';

	document.getElementById('scs2aq').style.display='none';

	

	

}

function mn33aq()

{

	document.getElementById('i3aq').style.display='block';

	document.getElementById('i33aq').style.display='none';

	document.getElementById('scs2aq').style.display='block';

	

	

}







function mn4()

{

	document.getElementById('i4').style.display='none';

	document.getElementById('i44').style.display='block';

	document.getElementById('scs3').style.display='none';

	

	

}

function mn44()

{

	document.getElementById('i4').style.display='block';

	document.getElementById('i44').style.display='none';

	document.getElementById('scs3').style.display='block';

	

	

}

function mn4as()

{

	document.getElementById('i4as').style.display='none';

	document.getElementById('i44as').style.display='block';

	document.getElementById('scs3as').style.display='none';

	

	

}

function mn44as()

{

	document.getElementById('i4as').style.display='block';

	document.getElementById('i44as').style.display='none';

	document.getElementById('scs3as').style.display='block';

	

	

}





function mn5()

{

	document.getElementById('i5').style.display='none';

	document.getElementById('i55').style.display='block';

	document.getElementById('scs4').style.display='none';

	

	

}

function mn55()

{

	document.getElementById('i5').style.display='block';

	document.getElementById('i55').style.display='none';

	document.getElementById('scs4').style.display='block';

	

	

}

function mn6()

{

	document.getElementById('i6').style.display='none';

	document.getElementById('i66').style.display='block';

	document.getElementById('scs5').style.display='none';

	

	

}

function mn66()

{

	document.getElementById('i6').style.display='block';

	document.getElementById('i66').style.display='none';

	document.getElementById('scs5').style.display='block';

	

	

}

function chkad()

{

	if(document.getElementById('ch').checked)

	{

		document.getElementById('ad').style.display='none';

	}

	else

	{

		

		document.getElementById('ad').style.display='block';

	}

}







	function t1()

{

	var a=document.getElementById('alemail').value;

	var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('alemail').style.border='1px solid lightgrey';



document.getElementById('alemail').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('alemail').value) == false) 

		{

			document.getElementById('alemail').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('alemail').style.border='1px solid lightgrey';



document.getElementById('alemail').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





	function t2()

{

	var a=document.getElementById('land_areacode').value;

	var re = /^[0-9]{1,8}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('land_areacode').style.border='1px solid lightgrey';



document.getElementById('land_areacode').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('land_areacode').value) == false) 

		{

			document.getElementById('land_areacode').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('land_areacode').style.border='1px solid lightgrey';



document.getElementById('land_areacode').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}



	function t3()

{

	var a=document.getElementById('landline_number').value;

	var re = /^[0-9]{3,15}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('landline_number').style.border='1px solid lightgrey';



document.getElementById('landline_number').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('landline_number').value) == false) 

		{

			document.getElementById('landline_number').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('landline_number').style.border='1px solid lightgrey';



document.getElementById('landline_number').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}







	function t4()

{

	var a=document.getElementById('skype').value;

	var re = /^[0-9a-zA-Z+!+@+#+$+%+^+&+*+?+_+~+(+).-]{3,25}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('skype').style.border='1px solid lightgrey';



document.getElementById('skype').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('skype').value) == false) 

		{

			document.getElementById('skype').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('skype').style.border='1px solid lightgrey';



document.getElementById('skype').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}









function t5()

{

	var a=document.getElementById('cad1').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('cad1').style.border='1px solid lightgrey';



document.getElementById('cad1').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('cad1').value) == false) 

		{

			document.getElementById('cad1').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('cad1').style.border='1px solid lightgrey';



document.getElementById('cad1').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





	function t6()

{

	var a=document.getElementById('cad2').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('cad2').style.border='1px solid lightgrey';



document.getElementById('cad2').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('cad2').value) == false) 

		{

			document.getElementById('cad2').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('cad2').style.border='1px solid lightgrey';



document.getElementById('cad2').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





	function t7()

{

	var a=document.getElementById('cad3').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('cad3').style.border='1px solid lightgrey';



document.getElementById('cad3').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('cad3').value) == false) 

		{

			document.getElementById('cad3').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('cad3').style.border='1px solid lightgrey';



document.getElementById('cad3').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





function t8()

{

	var a=document.getElementById('cpin').value;

	var re = /^[0-9]{6,6}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('cpin').style.border='1px solid lightgrey';



document.getElementById('cpin').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('cpin').value) == false) 

		{

			document.getElementById('cpin').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('cpin').style.border='1px solid lightgrey';



document.getElementById('cpin').style.boxShadow='0px 0px 0px red';

		}

		

	}

}

	function t9()

{

	var a=document.getElementById('pad1').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('pad1').style.border='1px solid lightgrey';



document.getElementById('pad1').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('pad1').value) == false) 

		{

			document.getElementById('pad1').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('pad1').style.border='1px solid lightgrey';



document.getElementById('pad1').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





	function t10()

{

	var a=document.getElementById('pad2').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('pad2').style.border='1px solid lightgrey';



document.getElementById('pad2').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('pad2').value) == false) 

		{

			document.getElementById('pad2').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('pad2').style.border='1px solid lightgrey';



document.getElementById('pad2').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





	function t11()

{

	var a=document.getElementById('pad3').value;

	var re = /^[A-Z+0-9+a-z+\+:+#+ .-]{5,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('pad3').style.border='1px solid lightgrey';



document.getElementById('pad3').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('pad3').value) == false) 

		{

			document.getElementById('pad3').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('pad3').style.border='1px solid lightgrey';



document.getElementById('pad3').style.boxShadow='0px 0px 0px red';

		}

		

	}

	

}





function t12()

{

	var a=document.getElementById('ppin').value;

	var re = /^[0-9]{6,6}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('ppin').style.border='1px solid lightgrey';



document.getElementById('ppin').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('ppin').value) == false) 

		{

			document.getElementById('ppin').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('ppin').style.border='1px solid lightgrey';



document.getElementById('ppin').style.boxShadow='0px 0px 0px red';

		}

		

	}

}



function thl1()

{

	var a=document.getElementById('tech1').value;

	var re = /^[a-zA-Z0-9+&+:+ .-]{2,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('tech1').style.border='1px solid lightgrey';



document.getElementById('tech1').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('tech1').value) == false) 

		{

			document.getElementById('tech1').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('tech1').style.border='1px solid lightgrey';



document.getElementById('tech1').style.boxShadow='0px 0px 0px red';

		}

		

	}

}





function thl2()

{

	var a=document.getElementById('tech2').value;

	var re = /^[0-9]{4,4}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('tech2').style.border='1px solid lightgrey';



document.getElementById('tech2').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('tech2').value) == false) 

		{

			document.getElementById('tech2').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('tech2').style.border='1px solid lightgrey';



document.getElementById('tech2').style.boxShadow='0px 0px 0px red';

		}

		

	}

}





function thl3()

{

	var a=document.getElementById('tech3').value;

	var re = /^[a-zA-Z0-9+%+.+ ]{1,5}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('tech3').style.border='1px solid lightgrey';



document.getElementById('tech3').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('tech3').value) == false) 

		{

			document.getElementById('tech3').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('tech3').style.border='1px solid lightgrey';



document.getElementById('tech3').style.boxShadow='0px 0px 0px red';

		}

		

	}

}



function quali1()

{

	var a=document.getElementById('qu1').value;

	var re = /^[a-zA-Z0-9+.+ .-]{2,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu1').style.border='1px solid lightgrey';



document.getElementById('qu1').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu1').value) == false) 

		{

			document.getElementById('qu1').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu1').style.border='1px solid lightgrey';



document.getElementById('qu1').style.boxShadow='0px 0px 0px red';

		}

		

	}

}



function quali2()

{

	var a=document.getElementById('qu2').value;

	var re = /^[0-9]{4,4}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu2').style.border='1px solid lightgrey';



document.getElementById('qu2').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu2').value) == false) 

		{

			document.getElementById('qu2').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu2').style.border='1px solid lightgrey';



document.getElementById('qu2').style.boxShadow='0px 0px 0px red';

		}

		

	}

}



function quali3()

{

	var a=document.getElementById('qu3').value;

	var re = /^[a-zA-Z0-9+%+.+ ]{1,5}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu3').style.border='1px solid lightgrey';



document.getElementById('qu3').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu3').value) == false) 

		{

			document.getElementById('qu3').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu3').style.border='1px solid lightgrey';



document.getElementById('qu3').style.boxShadow='0px 0px 0px red';

		}

		

	}

}





function quali4()

{

	

var aa=document.getElementById('qu4').value;

if(aa.length<10)

{



document.getElementById('qu4').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';

}

else

{

document.getElementById('qu4').style.border='1px solid lightgrey';



document.getElementById('qu4').style.boxShadow='0px 0px 0px red';



}



}





function quali5()

{

	

var aa=document.getElementById('qu5').value;

if(aa.length<10)

{



document.getElementById('qu5').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';

}

else

{

document.getElementById('qu5').style.border='1px solid lightgrey';



document.getElementById('qu5').style.boxShadow='0px 0px 0px red';



}



}



function quali6()

{

	var a=document.getElementById('qu6').value;

	var re = /^[0-9a-zA-Z+ ]{1,4}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu6').style.border='1px solid lightgrey';



document.getElementById('qu6').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu6').value) == false) 

		{

			document.getElementById('qu6').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu6').style.border='1px solid lightgrey';



document.getElementById('qu6').style.boxShadow='0px 0px 0px red';

		}

		

	}

}





function quali7()

{

	var a=document.getElementById('qu7').value;

	var re = /^[a-zA-Z+.+&+ .-]{2,10}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu7').style.border='1px solid lightgrey';



document.getElementById('qu7').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu7').value) == false) 

		{

			document.getElementById('qu7').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu7').style.border='1px solid lightgrey';



document.getElementById('qu7').style.boxShadow='0px 0px 0px red';

		}

		

	}

}





function quali8()

{

	var a=document.getElementById('qu8').value;

	var re = /^[a-zA-Z+.+&+ .-]{5,40}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu8').style.border='1px solid lightgrey';



document.getElementById('qu8').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu8').value) == false) 

		{

			document.getElementById('qu8').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu8').style.border='1px solid lightgrey';



document.getElementById('qu8').style.boxShadow='0px 0px 0px red';

		}

		

	}

}







function quali9()

{

	var a=document.getElementById('qu9').value;

	var re = /^[a-zA-Z+.+&+ .-]{2,20}$/;

    if(a=="")

	{

	//alert('dfdf');

document.getElementById('qu9').style.border='1px solid lightgrey';



document.getElementById('qu9').style.boxShadow='0px 0px 0px red';

	}

	else

	{

	//alert(a);

		

		if (re.test(document.getElementById('qu9').value) == false) 

		{

			document.getElementById('qu9').style.boxShadow='0px 0px 5px red, 0px 0px 5px red';



        }

		else

		{

			

document.getElementById('qu9').style.border='1px solid lightgrey';



document.getElementById('qu9').style.boxShadow='0px 0px 0px red';

		}

		

	}

}

</script>

<script type="text/javascript" language="javascript">
var elements = document.getElementsByTagName("INPUT");
for (var i = 0; i < elements.length; i++) {
    elements["dob"].oninvalid = function(e) {
        e.target.setCustomValidity("");
        if (!e.target.validity.valid) {
            e.target.setCustomValidity("This field cannot be left blank");
        }
    };
    elements[i].oninput = function(e) {
        e.target.setCustomValidity("");
    };
}</script>
</head>



<body>



	

	<div style="border:0px solid black;margin:60px 0px 0px 0px;">



<div id="header">



<ul>

<li></li>

<li style="width:80px;padding:8px;margin:0px;">

<img src='newimages/j.png' style="width:100%;height:100%;"  />

</li>



<li></li>

<li style="text-align:center;display:none;" id="mover">

<img src="newimages/home4.png" style="width:30px;height:15px;" />

<a href="index1.php">Home</a></li>



<li id="mover" style="display:none;">

<img src="newimages/myacc.png" style="width:20px;height:15px;" />

<a href="#">My Account</a></li>







</ul>



<ul style="float:right;">

<li>&emsp;</li>

<?php



if(!isset($_SESSION['seeker_id']))

{

	







?>

<li id="mover" style="display:none;"><img src="newimages/employerr.png" style="width:20px;height:15px;" /><a href="emplogin.php">Employer</a></li>

<?php

}

?>

<li>&emsp;</li>





</ul>

</div>



</div>

<div class="container container_12">

	

	<!-- Header -->

  

    <?php //include("includes/header.php"); ?>

  	  <?php //include("includes/headermenu.php"); ?>

	    

	   </div>

   

    <?php 

	

	//include("includes/topcompany.php");

	

	?>

    <div  style="width:100%; margin-left:0px; margin-top:10px;background-color:white;">

	

	<br/>

	<center>

	<div style="background-color:#7cfc00;font-weight:bolder;color:white;border:1px solid lightgrey;width:79.5%;border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;"><div style="padding:5px;font-size:18px;"> Please check your E-mail to activate your account to login, &nbsp;you can add more details now . . .

	</div>

	</div>

	<br/>

        <div class="box radius fixheight1" style="height:auto;width:80%;min-height:500px; background:white;border:1px solid grey;">

			<div style="position:relative;width:100%;box-shadow:0px 10px 15px lightgrey;background-color:#606060;border-radius:5px 5px 0px 0px;height:40px;-webkit-border-radius:5px 5px 0px 0px;-moz-border-radius:5px 5px 0px 0px; ">

<div style="color:white;font-size:22px;font-weight:bolder;margin:0px 0px 0px 0px;height:40px;padding:4px;">

Update My Profile

</div>

</div>			

				<div id="top-destination-panel" class="radius" style='background: none repeat scroll 0 0 #fff;width:60%; '>

				

					<br>

		 <form name="register" action="newsaveuser2.php" method="post" enctype="multipart/form-data" onSubmit="return user_validation();">

<?php 

if(isset($_REQUEST['ermsg']))

{

	echo "<p style='color:red;font-weight:bold;text-align:center;font-size:14px;'>".$_REQUEST['ermsg']."</p>";

}



?>







<!--

<div  style="background-color:#E8E8E8;height:30px;border:1px solid black;">

	Create Your Account<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;" id="i1" onclick="mn1()"/><img src='plus.jpg' onclick="mn11()" style="width:20px;height:20px;display:none;" id="i11"/></span>&nbsp;

		

		</div>

		

		

<div  style="margin:20px 0px 0px 0px;background-color:#E8E8E8;height:30px;">

		<input name="username" id="username" type="text" placeholder="Min 6 characters" style="height:30px;width:97%;border-radius:3px;"  required pattern="[A-Za-z0-9]{6,20}" title="Username must be atleast 6 characters" onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" maxlength="30" value="<?php echo $_SESSION['j1'];  ?>"/>

		

		</div>

		

		

<div  style="margin:20px 0px 0px 0px;background-color:#E8E8E8;height:30px;">

		<input name="username" id="username" type="text" placeholder="Min 6 characters" style="height:30px;width:46.5%;border-radius:3px;"  required pattern="[A-Za-z0-9]{6,20}" title="Username must be atleast 6 characters" onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" maxlength="30" value="<?php echo $_SESSION['j1'];  ?>"/>

		<input name="username" id="username" type="text" placeholder="Min 6 characters" style="height:30px;width:46.5%;border-radius:3px;"  required pattern="[A-Za-z0-9]{6,20}" title="Username must be atleast 6 characters" onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" maxlength="30" value="<?php echo $_SESSION['j1'];  ?>"/>

		

		</div>-->

		

		

<table width="100%">

	<tr>

		<td colspan="4"  class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Update My Account<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;" id="i1" onclick="mn1()"/><img src='plus.jpg' onclick="mn11()" style="width:20px;height:20px;display:none;" id="i11"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	

	<div id="scs1">

	<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td width="35%" colspan="4" align="center">

		<div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:10px 0px 0px 0px;color:grey;font-size:14px;">&nbsp;Name : <?php echo($_SESSION['nm']);  ?>	<input type="hidden" name="email" value="<?php echo($_SESSION['nmem']); ?>"/>

			

			<input type="hidden" name="id" value="<?php echo($_SESSION['rid']); ?>"/>

			

		<!--	<input name="username" id="username" type="text" placeholder="Min 6 characters" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" required pattern="[A-Za-z0-9]{6,20}" title="Username must be atleast 6 characters" onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" maxlength="30" value="<?php echo $_SESSION['j1'];  ?>"/>

	-->

	</div>

	</div>

		</td>

		<!--<td>

			<span id="usernameInfo"></span>

		</td>-->

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	<tr>

		<td colspan="4" align="center">

		<div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:10px 0px 0px 0px;color:grey;font-size:14px;">&nbsp;E - Mail Id : <?php echo($_SESSION['nmem']);  ?>

			</div>

			</div>

			<!--

			<input name="password" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" type="password" id="password" placeholder="Min 6 characters" class="textbox-registration" onChange="pschk()" onkeyup="passwordStrength(this.value)" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Should be alpha numeric with a special character and an uppercase and a lowercase" onKeyPress="(document.getElementById('uname').innerHTML = '');" onFocus="return chk_sname();" onBlur="this.value=trim(this.value);" value="<?php  if(isset($_SESSION['j2'])){ echo($_SESSION['j2']); } ?>" />

		-->

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr><!--

<tr>

						<td align="right">

							<span style="color:#FF0000;"></span>

							</td>

						<td align="center"></td>

						<td>

													

			<div id="passwordStrength" style="width:210px;height:18px;margin:0px 0px 0px 0px;" class="strength0">

			<div  id="passwordDescription" style="width:210px;text-align:center;">Password Strength</div>

			</div></td>

					</tr>

					

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="right">

			<span style="color:#FF0000;">*</span> Confirm Password

		</td>

		<td align="center">:</td>

		<td>

			<input name="confirmpassword" type="password" placeholder="Min 6 characters" id="confirmpassword" class="textbox-registration" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Should be alpha numeric with a special character and an uppercase and a lowercase" onBlur="this.value=trim(this.value);" value="<?php echo($homeregiconfirm); if(isset($_SESSION['j3'])){ echo($_SESSION['j3']); }?>"/>

		</td>

		<td></td>

	</tr>

<tr><td colspan="4">&nbsp;</td></tr>-->

	

	<!--<tr>

		<td align="center" colspan="4">

			<input name="yourname"  type="text" placeholder="Your Name" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" required pattern="[A-Za-z+ ]{3,25}" title="Your name must be atleast 3 characters" onKeyPress="return alpha(event);" value="<?php if(isset($_SESSION['j4'])) { echo $_SESSION['j4']; } ?>" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<input name="email" id="email" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" type="text" class="textbox-registration" required onBlur="this.value=trim(this.value); return email_val(this.value);" value="<?php if(isset($_SESSION['j9'])) { echo $_SESSION['j9']; } ?>" />

<input type="hidden" name="email_sts" id="email_sts" value="0">

		</td>

		

		<td><span id="emailInfo"><? if(isset($_SESSION['j9'])) { ?><font color="#009966" style="font-size:12px;">Email Id is available</font><? } ?></span></td>

		

	</tr>

<tr><td colspan="4">&nbsp;</td></tr>-->



<tr>

		<td align="center" colspan="4">

		

			<input name="land_countrycode" readonly placeholder="Country Code" style="text-align:right;height:30px;border:1px solid lightgrey;width:28.5%;border-radius:3px;color:grey;" id="land_countrycode" type="text" class="textbox-registration" pattern="[0-9]{2,3}" title="It should be numeric"  onKeyPress="return checkIt(event);" maxlength="3" value="91"/>

			

			

			<input name="mobile_number" id="mobile_number" type="text" class="textbox-registration" readonly  required pattern="[0-9]{10,10}" placeholder="Mobile Number" style="height:30px;border:1px solid lightgrey;width:63.5%;border-radius:3px;" onKeyPress="return checkIt(event);" value="<?php echo($_SESSION['mob']);  ?>" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="alemail" id="alemail" onkeyup="t1()" onchange="t1()" onBlur="t1()" type="text" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration"  placeholder="Alternative E- mail id" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" title="Please enter proper alternative e - mail id" onBlur="this.value=trim(this.value);" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	



	<tr>

		<td align="center" colspan="4">

			<input name="dob" id="dob" pattern="[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}" title="You should follow the required format eg : MM/DD/YYYY" type="text"  style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" required="required"       oninvalid="this.setCustomValidity('Please fill in your date of birth')"placeholder="Date of Birth [DD/MM/YYYY] - Mandatory Field"  onBlur="this.value=trim(this.value);" onChange="check_dob(this.value);" value="<?php if(isset($_SESSION['j29'])) { echo $_SESSION['j29']; } ?>"/>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="left" colspan="4">

		<div style="margin:0px 0px 0px 10px;">

			<input type="radio" id="male" name="gender" value="m" style="width:25px;height:25px;padding:5px;" checked="checked" />

			<label for="male">Male</label>

			

			&nbsp;&nbsp;&nbsp;&nbsp;

			

			<input type="radio" id="female" style="width:25px;height:25px;padding:5px;" name="gender" value="f" />

			<label for="female">Female</label>

			</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<input name="land_areacode" placeholder="STD / ISD Code" pattern="[0-9]{1,8}" title="It shold be numeric" onkeyup="t2()" onBlur="t2()" onchange="t2()" style="text-align:right;height:30px;border:1px solid lightgrey;width:28.5%;border-radius:3px;" id="land_areacode" type="text" class="textbox-registration" style="width:40px;" onKeyPress="return checkIt(event);" maxlength="6" value="<?php if(isset($_SESSION['j28'])) { echo $_SESSION['j28']; } ?>" />

			

			<input name="landline_number" placeholder="Land Line  Number" onkeyup="t3()" onBlur="t3()" onchange="t3()" pattern="[0-9]{3,15}" title="It shold be numeric" style="height:30px;border:1px solid lightgrey;width:63.5%;border-radius:3px;" id="landline_number" type="text" class="textbox-registration" style="width:135px;" onKeyPress="return checkIt(event);" value="<?php if(isset($_SESSION['j11'])) { echo $_SESSION['j11']; } ?>"  />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	



	<tr>

		<td align="center" colspan="4">

		

			<input name="skype" pattern="[0-9a-zA-Z+!+@+#+$+%+^+&+*+?+_+~+(+).-]{3,25}" onkeyup="t4()" onBlur="t4()" onchange="t4()" placeholder="Skype ID" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" id="skype" type="text" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

		<div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:4px 0px 0px 0px;color:grey;font-size:14px;">
		<?php
		if(isset($_SESSION['rresume']))
		{
			$rs=base64_encode($_SESSION['rresume']);
			?>
			<a href="viewresumee.php?rss=<?php echo($rs)?>" target="_blank" style="text-decoration:none;">&nbsp;View Resume</a>
			<?php
		}
		else
		{
		?>
		&nbsp;Upload  Resume

			<input type="file"  name="vt15" id="fupload" class="textbox-registration" onBlur="this.value=trim(this.value);" onChange="return file_upload(this);" value="<?php if(isset($_SESSION['j18'])) { echo $_SESSION['j18']; } ?>"/>
<?php
		}
		?>
		</div>

		</div>

		</td>

		<!--<td><font color="#999999">Supported Formats: doc, docx and pdf Max file size: 500 KB</font></td>-->

	</tr>

		

	<tr><td colspan="4"><div style="margin:0px 0px 0px 6px;"><font color="#999999">Supported Formats: doc, docx and pdf Max file size: 500 KB</font></div></td></tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td colspan="4" >

		<div style="margin:0px 0px 0px 6px;">

			<input name="terms" <? if(isset($_SESSION['datack'])) { ?>checked="checked"<? } ?> id="terms" required title="Please accept the terms and conditions" type="checkbox" value="chk"/>

			I agree to the <a href="terms.php" target="_blank" style="text-decoration:underline;" class='side-link'>Terms and Conditions</a>

		</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

</table>

</div>

<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Contact Address<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i2" onclick="mn2()"/><img src='plus.jpg' onclick="mn22()" style="width:20px;height:20px;" id="i22"/></span>&nbsp;

		</div>

		</td>

	</tr>

	

	</table>

	<div id="scs" style="display:none;">

	<table width="100%" >

	<tr><td colspan="4">&nbsp;</td></tr>

		<tr>

		<td align="left" colspan="4"> <div style="margin:0px 0px 0px 6px;"><b>Current Address</b><b>:</b></div></td>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="cad1" id="cad1" placeholder="Address Line1" onkeyup="t5()" onBlur="t5()" onchange="t5()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" type="text" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{5,20}" title="Please enter proper address" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="cad2" id="cad2" placeholder="Address Line2" onkeyup="t6()" onchange="t6()" onBlur="t6()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" type="text" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{5,20}" title="Please enter proper address without any ' - '" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="cad3" id="cad3" type="text" onkeyup="t7()" onchange="t7()" onBlur="t7()" placeholder="Address Line3" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{3,20}" title="Please enter proper address without any ' - '" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>



	

	<tr>

		<td align="center" colspan="4">

		

			<select class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" name="select_country" id="select_country" onChange="loadXMLDoc(this.value);">

				<option value="" >  Country </option>

				<?php //if(isset($_SESSION['j5']))

					//{

?>						<!--<option value="<?php echo $_SESSION['j51']; ?>" selected><?php echo $_SESSION['j5']; ?></option>-->

<?php //} 

			 $selectcountryresult=mysql_query("select * from countries order by countryName asc");

			while($selectcountryrow=mysql_fetch_array($selectcountryresult))

			{

			?>

				<option value="<?php echo $selectcountryrow['countryID'];?>" > <?php echo $selectcountryrow['countryName'];?> </option>

			<?php } ?>

			</select>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<?php //if(isset($_SESSION['datack']))

					//{?>

			<!--<input type="text" name="state" value="<?php echo $_SESSION['j6']; ?>" class="textbox-registration" />-->

			

<?php //}

//else

//{

	?>

	

			<select class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" id="state" name="state" onChange="loadcity(this.value)">

				<option value=""> State </option>

					

					<!--<option selected><?php echo $_SESSION['j6']; ?></option>-->

			</select>

		

	<?php

//}

?>



		<!--<span id="stateinfo" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;"></span>-->

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<input type="hidden" value="0" id="hc1" name="hc1" />

			<input type="hidden" value="0" id="hc2" name="hc2" />

				<?php //if(isset($_SESSION['datack']))

					//{?>

			<!--<input type="text" name="city" value="<?php echo $_SESSION['j7']; ?>" class="textbox-registration" />-->

			

<?php// }

//else

//{

	?>

			

			<select id="city" name="city" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" class="selectbox-registration">

				<option value=""> City </option>

				

					<!--<option selected><?php echo $_SESSION['j6']; ?></option>

		-->

			</select>

			<?php

//}

?>

<!--

		<span id="cityinfo" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;"></span>-->

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="cpin" id="cpin" onkeyup="t8()" onchange="t8()" onBlur="t8()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" placeholder="Pincode" type="text" pattern="[0-9]{6,6}" title="Enter correct pincode" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	<tr>

		<td align="left" colspan="4"> <div style="margin:0px 0px 0px 6px;"><b>Permanent Address</b><b>:</b>

		<input type="checkbox" onclick="chkad()" value="addr" name="same" id="ch">&nbsp; Same as the above

		</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

</table>

<div id="ad">

<table width="100%">

	<tr>

		<td align="center" colspan="4">

			<input name="pad1" id="pad1" onkeyup="t9()" onchange="t9()" onBlur="t9()" type="text" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" placeholder="Address Line1" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{5,20}" title="Please enter proper address without any ' - '" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="pad2" onkeyup="t10()" onkeyup="t10()" onchange="t10()"onBlur="t10()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" placeholder="Address Line2" id="pad2" type="text" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{5,20}" title="Please enter proper address without any ' - '" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<input name="pad3" id="pad3" onkeyup="t11()" onchange="t11()" onBlur="t11()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" placeholder="Address Line3" type="text" pattern="[A-Z+0-9+a-z+/+:+#+ .-]{5,20}" title="Please enter proper address without any ' - '" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>



	

	<tr>

		<td align="center" colspan="4">

		

			<select class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;"  name="pselect_country" id="pselect_country" onChange="ploadXMLDoc(this.value);">

				<option value="" > Country </option>

				<?php  

			 $selectcountryresult=mysql_query("select * from countries order by countryName asc");

			while($selectcountryrow=mysql_fetch_array($selectcountryresult))

			{

			?>

				<option value="<?php echo $selectcountryrow['countryID'];?>" > <?php echo $selectcountryrow['countryName'];?> </option>

			<?php } ?>

			</select>

		<!--

		<span id="pcountryinfo" style="height:40px;border:1px solid lightgrey;width:95%;border-radius:3px;"></span>

		-->

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

	

			<select class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" id="pstate" name="pstate" onChange="ploadcity(this.value)">

				<option value=""> State </option>

					

			</select>

	<!--<span id="pstateinfo" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;"></span>

	-->

	</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

		

			<input type="hidden" value="0" id="hc1" name="hc1" />

			<input type="hidden" value="0" id="hc2" name="hc2" />

		

			

			<select id="pcity" name="pcity" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" class="selectbox-registration">

				<option value=""> City </option>

				

		

			</select>

	<!--<span id="pcityinfo" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;"></span>

	-->

	</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

		

			<input name="ppin" id="ppin" onkeyup="t12()" onchange="t12()" onBlur="t12()" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" placeholder="Pincode" type="text" pattern="[0-9]{6,6}" title="Enter correct pincode" class="textbox-registration" />

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	</div>

	

	

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Technical Certifications<span style="float:right;"><span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i3aq" onclick="mn3aq()"/><img src='plus.jpg' onclick="mn33aq()" style="width:20px;height:20px;" id="i33aq"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	<div id="scs2aq" style="display:none;">

	<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

	<!--	<input id="btnAdd" type="button" value="Add More" style="display:block;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;" />

-->

<div id="innere" style="width:100%;">



<table border='1' id='asdf' width='95%' >

				

 <tr id='rr' >

<td align='left' width='33%' id='label_caption'></td>

<td align='left' width='1%'></td><td align='left' colspan="3" width='33%' id='label_caption'></td><td align='left' width='1%'></td><td 



align='right' width='32%' id='label_caption'><input type='button' style="border-radius:5px;-webkit-border-radius:5px;-moz-



border-radius:5px;" value='Add One More' id="btnAdde" /></td>

</tr>

 

 <tr id='rr' >

<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>

</tr>





 <tr id='rr' >

<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>

</tr>





 <tr id='rr' >

<td align='left' width='33%' id='label_caption'><input type='text' name='technical' onkeyup="thl1()" onchange="thl1()" onBlur="thl1()" id="tech1" pattern="[a-zA-Z0-9+&+:+ .-]{2,20}" title="Please enter proper certificate name" style='height:30px;border:1px solid 



lightgrey;width:95%;border-radius:3px;' placeholder='Certification Name' ></td>

<td align='left' width='1%'></td><td align='left' colspan="3" width='33%' id='label_caption'><input type='text' name='technicala' onkeyup="thl2()" onchange="thl2()" onBlur="thl2()" id="tech2"



style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern="[0-9]{4,4}" title="It should be numeric" placeholder='Year of Pass' ></td><td align='left' 



width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name='technicalb' onkeyup="thl3()" onchange="thl3()" onBlur="thl3()" id="tech3"



style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern="[a-zA-Z0-9+%+.+ ]{1,5}" title="Please enter proper grade or percentage" placeholder='Percentage or Grade' ></td>

</tr>

 <tr id='rr' >

<td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td>

</tr>



</table>







</div>

</td>

</tr>

	

	

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	

	

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Educational Qualifications<span style="float:right;"><span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i3" onclick="mn3()"/><img src='plus.jpg' onclick="mn33()" style="width:20px;height:20px;" id="i33"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	<div id="scs2" style="display:none;">

	<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

	<!--	<input id="btnAdd" type="button" value="Add More" style="display:block;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;" />

-->

<div id="inner" style="width:100%;">

      <table border='1'  width='95%' > 

							

							  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 



				

  <tr id='rr' > 

 <td align='left' width='33%' id='label_caption'></td> 

 <td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'></td><td align='left' width='1%'></td><td align='right' width='32%' id='label_caption'><input type='button' style='border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;' value='Add One More' id='btnAdd' /></td> 

 </tr> 



  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 



  <tr id='rr' > 

 <td align='left' width='33%' id='label_caption'>

<input type='text' name="education" id='qu1' pattern='[a-zA-Z0-9+.+&+ .-]{2,20}' onkeyup='quali1()' onchange='quali1()' onBlur='quali1()' title='Please enter proper qualification' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' placeholder='Qualification' >

	



</td> 

 <td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' onkeyup='quali2()' onchange='quali2()' onBlur='quali2()' name="educationa" id='qu2' pattern='[0-9]{4,4}' title='It should be numeric' style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' placeholder='Year of Pass' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name="educationb" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' id='qu3' onkeyup='quali3()' onchange='quali3()' onBlur='quali3()' pattern='[a-zA-Z0-9+%+.+ ]{1,5}' title='Please enter proper grade or percentage' placeholder='Percentage or Grade' ></td> 

 </tr> 



  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 





  <tr id='rr' > 

 <td align='left' width='33%' id='label_caption'><input type='text' id='qu4' name="educationc" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}' title='You should follow the required format eg : MM/DD/YYYY' onkeyup='quali4()' onchange='quali4()' onBlur='quali4()' onfocus='quali4()'  placeholder='Course Start Date' ></td> 

 <td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' id='qu5' name="educationd" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' onkeyup='quali5()' onchange='quali5()' onBlur='quali5()' onfocus='quali5()' pattern='[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}' title='You should follow the required format eg : MM/DD/YYYY' placeholder='Course End Date' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name="educatione" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[0-9a-zA-Z+ ]{1,4}' title='Please enter proper course duration' onkeyup='quali6()' onchange='quali6()' onBlur='quali6()' id='qu6' placeholder='Course Duration in Years' ></td> 

 </tr> 



  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 





  <tr id='rr' > 

 <td align='left' width='33%' id='label_caption'><input type='text' name="educationf" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{2,20}' title='Please enter proper specialization' onkeyup='quali7()' onchange='quali7()' onBlur='quali7()' id='qu7' placeholder='Specilization' ></td> 

 <td align='left' width='1%'></td><td align='left' colspan='3' width='33%' id='label_caption'><input type='text' name="educationg" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{5,40}' title='Please enter proper college name' id='qu8' onkeyup='quali8()' onchange='quali8()' onBlur='quali8()' placeholder='College Name' ></td><td align='left' width='1%'></td><td align='left' width='32%' id='label_caption'><input type='text' name="educationh" style='height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;' pattern='[a-zA-Z+.+&+ .-]{2,20}' title='Please enter proper college location' onkeyup='quali9()' onchange='quali9()' onBlur='quali9()' id='qu9' placeholder='College Location' ></td> 

 </tr> 

  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 

<tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'><select name="educationi"  style='height:40px;border:1px solid lightgrey;width:100%;border-radius:3px;'><option>University</option><option>Acharya N.G. Ranga Agricultural University, Hyderabad</option><option>Acharya Nagarjuna University , Guntur</option><option>Adikavi Nannaya University, Rajahmundry</option><option>Ahmedabad University, Ahmedabad</option><option>Alagappa University, Karaikudi</option><option>Aliah University, Kolkata</option><option>Aligarh Muslim University, Aligarh</option><option>All India Institute of Medical Sciences, New Delhi</option><option>Alliance University, Bangalore</option><option>Amity University, Noida</option><option>Amrita Vishwa Vidyapeetham, Coimbatore</option><option>Anand Agricultural University, Anand</option><option>Andhra University, Visakhapatnam</option><option>Anna University, Chennai</option><option>Annamalai University, Chidambaram</option><option>Apeejay Stya University, Gurgaon</option><option>Arni University, Kathgarh</option><option>Aryabhatta Knowledge University, Patna</option><option>Assam Agricultural University, Jorhat</option><option>Assam Don Bosco University, Guwahati</option><option>Assam University, Silchar</option><option>Avinashilingam University, Coimbatore</option><option>Awadhesh Pratap Singh University, Rewa</option><option>Ayush and Health Sciences University of Chhattisgarh, Raipur</option><option>Azim Premji University, Bangalore</option><option>B.R. Ambedkar Bihar University, Muzaffarpur</option><option>B.S. Abdur Rahman University, Chennai</option><option>Baba Farid University of Health Sciences, Faridkot</option><option>Baba Ghulam Shah Badhshah University, Rajouri</option><option>Babasaheb Bhimrao Ambedkar University, Lucknow</option><option>Babu Banarasi Das University, Lucknow</option><option>Baddi University of Emerging Sciences and Technologies, Baddi</option><option>BAHRA University, Shimla</option><option>Banaras Hindu University, Varanasi</option><option>Banasthali Vidyapith, Banasthali</option><option>Bangalore University, Bangalore</option><option>Barkatullah University, Bhopal</option><option>Bastar Vishwavidyalaya, Bastar</option><option>Bengal Engineering and Science University, Howrah</option><option>Berhampur University, Berhampur</option><option>Bhagat Phool Singh Mahila Vishwavidyalaya, Khanpur Kalan</option><option>Bhagwant University, Ajmer</option><option>Bharat Ratna Dr. B.R. Ambedkar University, New Delhi</option><option>Bharathiar University, Coimbatore</option><option>Bharathidasan University, Tiruchirappalli</option><option>Bharati Vidyapeeth University, Pune</option><option>Bhatkhande Music Institute, Lucknow</option><option>Bhupendra Narayan Mandal University, Madhepura</option><option>Bidhan Chandra Krishi Vishwavidyalaya, Nadia</option><option>Biju Patnaik University of Technology, Rourkela</option><option>Birla Institute of Technology, Ranchi</option><option>Birla Institute of Technology and Science, Pilani</option><option>Birsa Agricultural University, Ranchi</option><option>Bundelkhand University, Jhansi</option><option>Calorx Teachers' University, Ahmedabad</option><option>Central Agricultural University, Imphal</option><option>Central Institute of Fisheries Education, Mumbai</option><option>Central University of Bihar, Patna</option><option>Central University of Gujarat, Gandhinagar</option><option>Central University of Haryana, Narnaul</option><option>Central University of Himachal Pradesh, Kangra</option><option>Central University of Jharkhand, Ranchi</option><option>Central University of Karnataka, Gulbarga</option><option>Central University of Kashmir, Srinagar</option><option>Central University of Kerala, Kasaragod</option><option>Central University of Orissa, Koraput</option><option>Central University of Punjab, Bathinda</option><option>Central University of Rajasthan, Dist-Ajmer</option><option>Central University of Tamil Nadu, Tiruvarur</option><option>Central University of Tibetan Studies, Varanasi</option><option>Centurion University of Technology and Management, Bhubaneswar</option><option>CEPT University, Ahmedabad </option><option>Chanakya National Law University, Patna</option><option>Chandra Shekhar Azad University of Agriculture & Technology, Kanpur</option><option>Charotar University of Science & Technology, Changa</option><option>Chaudhary Charan Singh Haryana Agricultural University, Hisar</option><option>Chaudhary Charan Singh University, Meerut</option><option>Chaudhary Devi Lal University, Sirsa</option><option>Chennai Mathematical Institute, Chennai</option><option>Chhatrapati Shahuji Maharaj Medical University, Lucknow</option><option>Chhatrapati Shahuji Maharaj University, Kanpur</option><option>Chhattisgarh Swami Vivekananda Technical University, Bhilai</option><option>Chitkara University, Chandigarh</option><option>Cochin University of Science and Technology, Kochi</option><option>CSK Himachal Pradesh Agricultural University, Palampur</option><option>Damodaram Sanjivayya National Law University, Visakhapatnam</option><option>Datta Meghe Institute of Medical Sciences, Nagpur</option><option>Davangere University, Davangere</option><option>Dayalbagh Educational Institute, Agra</option><option>Deccan College Post-Graduate an d Research Institute, Pune</option><option>Deen Dayal Upadhyay Gorakhpur University, Gorakhpur</option><option>Deenbandhu Chhotu Ram University of Science and Technology, Murthal</option><option>Delhi Technological University, Delhi</option><option>Dev Sanskriti Vishwavidyalaya, Haridwar</option><option>Devi Ahilya Vishwavidyalaya, Indore</option><option>Dharmsinh Desai University, Nadiad</option><option>Dhirubhai Ambani Institute of Information & Communication Technology, Gandhinagar</option><option>Dibrugarh University, Dibrugarh</option><option>Doon University, Dehradun</option><option>Dr K.N. Modi University, Newai</option><option>Dr. B R Ambedkar National Institute of Technology, Jalandhar</option><option>Dr. B.R. Ambedkar University, Etcherla</option><option>Dr. B.R. Ambedkar University, Agra</option><option>Dr. Babasaheb Ambedkar Marathwada University, Aurangabad</option><option>Dr. Babasaheb Ambedkar Technological University, Lonere</option><option>Dr. Balasaheb Sawant Konkan Krishi Vidyapeeth, Dapoli</option><option>Dr. C.V. Raman University, Bilaspur</option><option>Dr. Hari Singh Gour University, Sagar</option><option>Dr. Panjabrao Deshmukh Krishi Vidyapeeth, Akola</option><option>Dr. Ram Manohar Lohia Avadh University, Faizabad</option><option>Dr. Ram Manohar Lohiya National Law University, Lucknow</option><option>Dr. Shakuntala Misra Rehabilitation University, Lucknow</option><option>Dr. Y.S. Parmar University of Horticulture and Forestry, Nauni</option><option>Dravidian University, Kuppam</option><option>EIILM University, Malabassey</option><option>Eternal University, Baru Sahib</option><option>Fakir Mohan University, Balasore</option><option>Galgotias University, Noida</option><option>Gandhi Institute of Technology and Management, Visakhapatnam</option><option>Gandhigram Rural University, Gandhigram</option><option>Ganpat University, Mehsana</option><option>Gauhati University, Guwahati</option><option>Gautam Buddha University, Greater Noida</option><option>GLA University, Chaumuhan</option><option>Goa University, Taleigao Plateau</option><option>Gokhale Institute of Politics and Economics, Pune</option><option>Govind Ballabh Pant University of Agriculture & Technology, Pantnagar</option><option>Gujarat Ayurved University, Jamnagar</option><option>Gujarat Forensic Sciences University, Gandhinagar</option><option>Gujarat National Law University, Gandhinagar</option><option>Gujarat Technological University, Ahmedabad</option><option>Gujarat University, Ahmedabad</option><option>Gujarat Vidyapith, Ahmedabad</option><option>Gulbarga University, Gulbarga</option><option>Guru Angad Dev Veterinary and Animal Sciences University, Ludhiana</option><option>Guru Ghasidas Vishwavidyalaya, Bilaspur</option><option>Guru Gobind Singh Indraprastha University, Delhi</option><option>Guru Jambheshwar University of Science & Technology, Hisar</option><option>Guru Nanak Dev University, Amritsar</option><option>Hemchandracharya North Gujarat University, Patan</option><option>Hemwati Nandan Bahuguna Garhwal University, Srinagar</option><option>Hidayatullah National Law University, Raipur</option><option>Himachal Pradesh University, Shimla</option><option>Himgiri ZEE University, Dehradun</option><option>Hindustan University, Chennai</option><option>Homi Bhabha National Institute, Mumbai</option><option>ICFAI University, Dehradun, Dehradun</option><option>ICFAI University, Jharkhand, Ranchi</option><option>ICFAI University, Tripura, Agartala</option><option>IFHE Hyderabad, Dontanapalli Village</option><option>IFTM University, Moradabad</option><option>Indian Agricultural Research Institute, New Delhi</option><option>Indian Institute of Foreign Trade, New Delhi</option><option>Indian Institute of Information Technology, Allahabad</option><option>Indian Institute of Information Technology and Management, Gwalior</option><option>Indian Institute of Information Technology,Design and Manufacturing, Chennai</option><option>Indian Institute of Science, Bangalore</option><option>Indian Institute of Space Science and Technology, Thiruvananthapuram</option><option>Indian Institute of Technology, Bhubaneswar, Bhubaneswar</option><option>Indian Institute of Technology, Bombay, Mumbai</option><option>Indian Institute of Technology, Delhi, New Delhi</option><option>Indian Institute of Technology, Gandhinagar, Chandkheda</option><option>Indian Institute of Technology, Guwahati</option><option>Indian Institute of Technology, Hyderabad, Yeddumailaram</option><option>Indian Institute of Technology, Indore, Indore</option><option>Indian Institute of Technology, Jodhpur</option><option>Indian Institute of Technology, Kanpur</option><option>Indian Institute of Technology, Kharagpur</option><option>Indian Institute of Technology, Madras, Chennai</option><option>Indian Institute of Technology, Mandi</option><option>Indian Institute of Technology, Patna</option><option>Indian Institute of Technology, Roorkee</option><option>Indian Institute of Technology, Ropar, Rupnagar</option><option>Indian Maritime University, Chennai</option><option>Indian School of Mines, Dhanbad</option><option>Indian Statistical Institute, Kolkata</option><option>Indian Veterinary Research Institute, Izatnagar</option><option>Indira Gandhi Agricultural University, Raipur</option><option>Indira Gandhi Institute of Development Research, Mumbai</option><option>Indira Gandhi National Tribal University, Amarkantak</option><option>Indira Kala Sangit Vishwavidyalaya, Khairagarh</option><option>Indraprastha Institute of Information Technology, New Delhi</option><option>Indus International University, Tehsil Haroli</option><option>Institute of Chemical Technology, Mumbai</option><option>Integral University, Lucknow</option><option>International Institute for Population Sciences, Mumbai</option><option>International Institute of Information Technology, Bangalore</option><option>International Institute of Information Technology, Hyderabad</option><option>Invertis University, Bareilly</option><option>Islamic University of Science and Technology, Pulwama</option><option>ITM University, Gurgaon</option><option>Jadavpur University, Kolkata</option><option>Jagadguru Ramanandacharya Rajasthan Sanskrit University, Jaipur</option><option>Jagan Nath University, Jaipur</option><option>Jagdishprasad Jhabarmal Tibrewala University, Jhunjhunu</option><option>Jai Narain Vyas University, Jodhpur</option><option>Jai Prakash Vishwavidyalaya, Chapra</option><option>Jain Vishva Bharati University, Ladnun</option><option>Jaipur National University, Jaipur</option><option>Jamia Hamdard, New Delhi</option><option>Jamia Millia Islamia, New Delhi</option><option>Jawaharlal Institute of Postgraduate Medical Education & Research, Puducherry</option><option>Jawaharlal Nehru Architecture and Fine Arts University, Hyderabad</option><option>Jawaharlal Nehru Centre for Advanced Scientific Research, Bangalore</option><option>Jawaharlal Nehru Krishi Vishwavidyalaya, Jabalpur</option><option>Jawaharlal Nehru Technological University, Hyderabad</option><option>Jawaharlal Nehru Technological University, Anantapur</option><option>Jawaharlal Nehru Technological University, Kakinada</option><option>Jawaharlal Nehru University, New Delhi</option><option>Jayoti Vidyapeeth Women's University, Jaipur</option><option>Jaypee University of Engineering & Technology, Raghogarh</option><option>Jaypee University of Information Technology, Waknaghat</option><option>Jiwaji University, Gwalior</option><option>Jodhpur National University, Jodhpur</option><option>JSS University,Mysore</option><option>Junagadh Agricultural University, Junagadh</option><option>K L University, Vaddeswaram</option><option>Kadi Sarva VishwaVidyalaya, Gandhinagar</option><option>Kakatiya University, Warangal</option><option>Kameshwar Singh Darbhanga Sanskrit University, Darbhanga</option><option>Kannada University, Vidyaranya</option><option>Kannur University, Kannur</option><option>Karnatak University, Dharwad</option><option>Karnataka State Law University, Hubli</option><option>Karnataka State Women's University, Bijapur</option><option>Karnataka Veterinary,Animal and Fisheries Sciences University, Bidar</option><option>Karunya University, Coimbatore</option><option>Kavikulguru Kalidas Sanskrit University, Nagpur</option><option>Kerala Agricultural University, Thrissur</option><option>Kerala Kalamandalam, Cheruthuruthy</option><option>Kerala University of Fisheries and Ocean Studies, Kochi</option><option>Kerala University of Health Sciences, Thrissur</option><option>Kerala Veterinary and Animal Sciences University, Pookode</option><option>KIIT University, Bhubaneswar</option><option>KLE University, Belgaum</option><option>Kolhan University, Chaibasa</option><option>Krantiguru Shyamji Krishna Verma Kachchh University, Bhuj</option><option>Krishna University, Machhlipattanam</option><option>Kumaun University, Nainital</option><option>Kurukshetra University, Kurukshetra</option><option>Kushabhau Thakre Patrakarita Avam Jansanchar University, Raipur</option><option>Kuvempu University, Shankaraghatta</option><option>Lakshmibai National Institute of Physical Education, Gwalior</option><option>Lalit Narayan Mithila University, Darbhanga</option><option>Lovely Professional University, Phagwara</option><option>Madhya Pradesh Pashu-Chikitsa Vigyan Vishwavidyalaya, Jabalpur</option><option>Madurai Kamaraj University, Madurai</option><option>Magadh University, Bodh Gaya</option><option>Mahamaya Technical University, Noida</option><option>Maharaja Ganga Singh University, Bikaner</option><option>Maharaja Krishnakumarsinhji Bhavnagar University, Bhavnagar</option><option>Maharana Pratap University of Agriculture and Technology, Udaipur</option><option>Maharashtra Animal and Fishery Sciences University, Nagpur</option><option>Maharashtra University of Health Sciences, Nashik</option><option>Maharishi Dayanand University, Rohtak</option><option>Maharishi Mahesh Yogi Vedic Vishwavidyalaya, Katni</option><option>Maharishi Panini Sanskrit Vishwavidyalaya, Ujjain</option><option>Maharishi University of Management and Technology, Bilaspur</option><option>Maharshi Dayanand Saraswati University, Ajmer</option><option>Mahatma Gandhi Antarrashtriya Hindi Vishwavidyalaya, Wardha</option><option>Mahatma Gandhi Chitrakoot Gramoday Vishwavidyalaya, Chitrakoot</option><option>Mahatma Gandhi Kashi Vidyapeeth, Varanasi</option><option>Mahatma Gandhi University, Nalgonda</option><option>Mahatma Gandhi University, Tura</option><option>Mahatma Gandhi University, Kottayam</option><option>Mahatma Jyoti Rao Phoole University, Jaipur</option><option>Mahatma Jyotiba Phule Rohilkhand University, Bareilly</option><option>Mahatma Phule Krishi Vidyapeeth, Rahuri</option><option>Makhanlal Chaturvedi Rashtriya Patrakarita Vishwavidyalaya, Bhopal</option><option>Malaviya National Institute of Technology, Jaipur</option><option>Manav Bharti University, Solan</option><option>Mangalayatan University, Aligarh</option><option>Mangalore University, Mangalore</option><option>Manipal University, Manipal</option><option>Manipur University, Imphal</option><option>Manonmaniam Sundaranar University, Tirunelveli</option><option>Marathwada Agricultural University, Parbhani</option><option>Martin Luther Christian University, Shillong</option><option>MATS University, Raipur</option><option>Maulana Azad National Institute of Technology, Bhopal</option><option>Maulana Azad National Urdu University, Hyderabad</option><option>Maulana Mazharul Haque Arabic and Persian University, Patna</option><option>Mewar University, Chittorgarh</option><option>MGM Institute of Health Sciences, Navi Mumbai</option><option>Mizoram University, Aizawl</option><option>Mohammad Ali Jauhar University, Rampur</option><option>Mohanlal Sukhadia University, Udaipur</option><option>Mother Teresa Women's University, Kodaikanal</option><option>Motilal Nehru National Institute of Technology, Allahabad</option><option>Nagaland University, Kohima</option><option>NALSAR University of Law, Hyderabad</option><option>Narendra Dev University of Agriculture and Technology, Faizabad</option><option>Narsee Monjee Institute of Management and Higher Studies, Mumbai</option><option>National Dairy Research Institute, Karnal</option><option>National Institute of Design, Ahmedabad</option><option>National Institute of Fashion Technology, New Delhi</option><option>National Institute of Mental Health and Neuro Sciences, Bangalore</option><option>National Institute of Pharmaceutical Education and Research, Mohali</option><option>National Institute of Pharmaceutical Education and Research, Ahmedabad</option><option>National Institute of Pharmaceutical Education and Research, Guwahati</option><option>National Institute of Pharmaceutical Education and Research, Hajipur</option><option>National Institute of Pharmaceutical Education and Research, Hyderabad</option><option>National Institute of Pharmaceutical Education and Research, Kolkata</option><option>National Institute of Pharmaceutical Education and Research, Rae Bareli</option><option>National Institute of Technology, Calicut</option><option>National Institute of Technology, Karnataka</option><option>National Institute of Technology, Raipur</option><option>National Institute of Technology, Agartala</option><option>National Institute of Technology, Durgapur</option><option>National Institute of Technology, Hamirpur</option><option>National Institute of Technology, Jamshedpur</option><option>National Institute of Technology, Kurukshetra</option><option>National Institute of Technology, Patna</option><option>National Institute of Technology, Rourkela</option><option>National Institute of Technology, Silchar</option><option>National Institute of Technology, Srinagar</option>	<option>National Institute of Technology, Tiruchirappalli</option>	<option>National Institute of Technology, Warangal</option><option>National Law Institute University, Bhopal</option><option>National Law School of India University, Bangalore</option><option>National Law University, New Delhi</option><option>National Law University, Jodhpur</option><option>National Law University, Orissa, Cuttack</option><option>National University of Educational Planning and Administration, New Delhi</option><option>National University of Study and Research in Law, Ranchi</option><option>Navsari Agricultural University, Navsari</option><option>Netaji Subhas Institute of Technology, New Delhi</option><option>Nilamber-Pitamber University, Medininagar</option><option>NIMS University, Jaipur</option><option>Nirma University of Science and Technology, Ahmedabad</option><option>NITTE University, Mangalore</option><option>Nizam's Institute of Medical Sciences, Hyderabad</option><option>Noida International University, Greater Noida</option><option>North Eastern Hill University, Shillong</option><option>North Eastern Regional Institute of Science and Technology, Itanagar</option><option>North Maharashtra University, Jalgaon</option><option>North Orissa University, Baripada</option><option>NTR University of Health Sciences, Vijayawada</option><option>O.P. Jindal Global University, Sonepat</option><option>Orissa University of Agriculture and Technology, Bhubaneswar</option><option>Osmania University, Hyderabad</option><option>Pacific University, Udaipur</option><option>Padmashree Dr. D.Y. Patil Vidyapith, Navi Mumbai</option><option>Palamuru University, Mahboobnagar</option><option>Pandit Deendayal Petroleum University, Gandhinagar</option><option>Pandit Ravishankar Shukla University, Raipur</option><option>Panjab University, Chandigarh</option><option>Patna University, Patna</option><option>PDPM Indian Institute of Information Technology, Design & Manufacturing, Jabalpur</option><option>PEC University of Technology, Chandigarh</option><option>Periyar Maniammai University, Vallam</option><option>Pondicherry University, Puducherry</option><option>Post Graduate Institute of Medical Education and Research, Chandigarh</option><option>Potti Sreeramulu Telugu University, Hyderabad</option><option>Pravara Institute of Medical Sciences, Loni</option><option>Presidency University, Kolkata</option><option>Pt. B. D. Sharma University of Health Sciences, Rohtak</option><option>Punjab Agricultural University, Ludhiana</option><option>Punjab Technical University, Jalandhar</option><option>Punjabi University, Patiala</option><option>Rabindra Bharati University, Kolkata</option><option>Raffles University, Neemrana</option><option>Rajasthan Agricultural University, Bikaner</option><option>Rajasthan Ayurved University, Jodhpur</option><option>Rajasthan Technical University, Kota</option><option>Rajasthan University of Health Sciences, Jaipur</option><option>Rajendra Agricultural University, Samastipur</option><option>Rajiv Gandhi National University of Law, Patiala</option><option>Rajiv Gandhi Proudyogiki Vishwavidyalaya, Bhopal</option><option>Rajiv Gandhi University, Itanagar</option><option>Rajiv Gandhi University of Health Sciences, Bangalore</option><option>Ramakrishna Mission Vivekananda University, Belur</option><option>Ranchi University, Ranchi</option><option>Rani Channamma University, Belagavi</option><option>Rani Durgavati Vishwavidyalaya, Jabalpur</option><option>Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur</option><option>Rashtriya Sanskrit Sansthan, New Delhi</option><option>Rashtriya Sanskrit Vidyapeetha, Tirupati</option><option>Ravenshaw University, Cuttack</option><option>Rayalaseema University, Kurnool</option><option>Sam Higginbottom Institute of Agriculture, Technology and Sciences, Allahabad</option><option>Sambalpur University, Burla</option><option>Sampurnanand Sanskrit Vishvavidyalaya, Varanasi</option><option>Sanjay Gandhi Post Graduate Institute of Medical Sciences, Lucknow</option><option>Sant Gadge Baba Amravati University, Amravati</option><option>Sant Longowal Institute of Engineering and Technology, Sangrur</option><option>Sardar Patel University, Vallabh Vidyanagar</option><option>Sardar Vallabhbhai National Institute of Technology, Surat </option><option>Sardar Vallabhbhai Patel University of Agriculture and Technology, Meerut</option><option>Sardarkrushinagar Dantiwada Agricultural University, Palanpur</option><option>Sarguja University, Ambikapur</option><option>SASTRA University, Thanjavur</option><option>Satavahana University, Karimnagar</option><option>Sathyabama University, Chennai</option><option>Saurashtra University, Rajkot</option><option>School of Planning and Architecture, Delhi</option><option>Sharda University, Greater Noida</option><option>Sher-e-Kashmir University of Agricultural Sciences and Technology of Kashmir, Srinagar</option><option>Shiv Nadar University, Tehsil Dadri</option><option>Shivaji University, Kolhapur</option><option>Shoolini University of Biotechnology and Management Sciences, Solan</option><option>Shree Somnath Sanskrit University, Junagadh</option><option>Shreemati Nathibai Damodar Thackersey Women's University, Mumbai</option><option>Shri Guru Ram Rai Education Mission, Dehradun</option><option>Shri Jagannath Sanskrit Vishvavidyalaya, Puri</option><option>Shri Lal Bahadur Shastri Rashtriya Sanskrit Vidyapeetha, New Delhi</option><option>Shri Mata Vaishno Devi University, Jammu</option><option>Shri Venkateshwara University, Gajraula</option><option>Shridhar University, Pilani</option><option>Sidho Kanho Birsha University, Kolkata</option><option>Sido Kanhu Murmu University, Dumka</option><option>Sikkim Manipal University, Tadong</option><option>Sikkim University, Tadong</option><option>Singhania University, Jhunjhunu</option><option>Sir Padampat Singhania University, Udaipur</option><option>South Asian University, New Delhi</option><option>Sree Chitra Thirunal Institute of Medical Sciences and Technology, Thiruvananthapuram</option><option>Sree Sankaracharya University of Sanskrit, Kalady</option><option>Sri Chandrasekharendra Saraswathi Viswa Mahavidyalaya, Kanchipuram</option><option>Sri Guru Granth Sahib World University, Fatehgarh Sahib</option><option>Sri Krishnadevaraya University, Anantapur</option><option>Sri Padmavati Mahila Visvavidyalayam, Tirupati</option><option>Sri Ramachandra University, Chennai</option><option>Sri Sai University, Palampur</option><option>Sri Venkateswara Institute of Medical Sciences, Tirupati</option><option>Sri Venkateswara University, Tirupati</option><option>Sri Venkateswara Vedic University, Tirupati</option><option>Sri Venkateswara Veterinary University, Tirupati</option><option>SRM University, Kattankulathur</option><option>Subharti University, Meerut</option><option>SunRise University, Alwar</option><option>Suresh Gyan Vihar University, Jaipur</option><option>Swami Ramanand Teerth Marathwada University, Nanded</option><option>Symbiosis International University, Pune</option><option>Tamil Nadu Agricultural University, Coimbatore</option><option>Tamil Nadu Dr Ambedkar Law University, Chennai</option><option>Tamil Nadu Dr. M.G.R.Medical University, Chennai</option><option>Tamil Nadu Physical Education and Sports University, Chennai</option><option>Tamil Nadu Teacher Education University, Chennai</option><option>Tamil Nadu Veterinary and Animal Sciences University, Chennai</option><option>Tamil University, Thanjavur</option><option>Tata Institute of Fundamental Research, Mumbai</option><option>Tata Institute of Social Sciences, Mumbai</option><option>Teerthanker Mahaveer University, Moradabad</option><option>Telangana University, Nizamabad</option><option>TERI University, New Delhi</option><option>Tezpur University, Tezpur</option><option>Thapar University, Patiala</option><option>The English and Foreign Languages University, Hyderabad</option><option>The Indian Law Institute, New Delhi</option><option>The LNM Institute of Information Technology, Jaipur</option><option>The Maharaja Sayajirao University of Baroda, Vadodara</option><option>The National University of Advanced Legal Studies, Kochi</option><option>The WB National University of Juridical Sciences, Kolkata</option><option>Thiruvalluvar University, Vellore</option><option>Tilka Manjhi Bhagalpur University, Bhagalpur</option><option>Tripura University, Tripura</option><option>Tumkur University, Tumkur</option><option>University of Agricultural Sciences, Bangalore</option><option>University of Agricultural Sciences, Dharwad</option><option>University of Allahabad, Allahabad</option><option>University of Burdwan, Bardhaman</option><option>University of Calcutta, Kolkata</option><option>University of Calicut, Tenhipalam</option><option>University of Delhi, Delhi</option><option>University of Gour, Banga, Malda</option><option>University of Hyderabad, Hyderabad</option><option>University of Jammu, Jammu, Tawi</option><option>University of Kalyani, Kalyani</option><option>University of Kashmir, Srinagar</option><option>University of Kerala, Thiruvananthapuram</option><option>University of Kota, Kota</option><option>University of Lucknow, Lucknow</option><option>University of Madras, Chennai</option><option>University of Mumbai, Mumbai</option><option>University of Mysore, Mysore</option><option>University of North Bengal, Siliguri</option><option>University of Petroleum and Energy Studies, Dehradun</option><option>University of Pune, Pune</option><option>University of Rajasthan, Jaipur</option><option>University of Science and Technology, Meghalaya, Baridua</option><option>University of Solapur, Solapur</option><option>University of Technology & Management, Shillong</option><option>Utkal University, Bhubaneswar</option><option>Utkal University of Culture, Bhubaneswar</option><option>Uttar Banga Krishi Viswavidyalaya, Pundibari</option><option>Uttar Pradesh Technical University, Lucknow</option><option>Uttarakhand Technical University, Dehradun</option><option>Uttaranchal Sanskrit University, Haridwar</option><option>Veer Bahadur Singh Purvanchal University, Jaunpur</option><option>Veer Kunwar Singh University, Arrah</option><option>Veer Narmad South Gujarat University, Surat</option><option>Veer Surendra Sai University of Technology, Sambalpur</option><option>Vel Tech Dr.RR & Dr.SR Technical University, Chennai</option><option>Vidyasagar University, Midnapore</option><option>Vijayanagara Sri Krishnadevaraya University, Bellary</option><option>Vikram University, Ujjain</option><option>Vikrama Simhapuri University, Nellore</option><option>Vinayaka Missions Sikkim University, Gangtok</option><option>Vinoba Bhave University, Hazaribag</option><option>Visva Bharati University, Santiniketan</option><option>Visvesvaraya National Institute of Technology, Nagpur</option><option>Visvesvaraya Technological University, Belgaum</option><option>VIT University, Vellore</option><option>West Bengal State University, Barasat</option><option>West Bengal University of Animal and Fishery Sciences, Kolkata</option><option>West Bengal University of Health Sciences, Kolkata</option><option>West Bengal University of Technology, Kolkata</option><option>YMCA University of Science and Technology, Faridabad</option><option>Yogi Vemana University, Kadapa</option></select></td> 

  </tr> 

  <tr id='rr' > 

 <td align='left' width='33%' colspan='7' id='label_caption'>&nbsp;</td> 

 </tr> 



 </table> 









</div>

</td>

</tr>



<!--

			<select name="basic_grad" class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:95%;border-radius:3px;" onChange="ugspec(this.value)">

			<option value="0"> Under Graduation </option>

			<?php

$hdn="";

			if(isset($_SESSION['j19'])) 

			{ 

		$hdn="block";

		if($_SESSION['j19']==0)

		{

			?>

		<option value="0"> Under Graduation </option>

		<?php

		}

		else

		{

		?>

		<option value="<?php echo $_SESSION['j19']; ?>" selected><?php echo $_SESSION['j191']; ?></option> 

		<?php }

			}

else

{

	$hdn="none";

}	?>

			<?php $graduateresult=mysql_query("select * from graduation");

			while($graduateresultrow=mysql_fetch_array($graduateresult))

			{									

			?>

			<option value="<?php echo $graduateresultrow['id'];?>"> <?php echo $graduateresultrow['degree'];?> </option>

			<?php } ?>

			</select>

		</td>

	</tr>

	

	<tr>

		<td colspan="4" align="center">

		

			<div style="width:95%;display:<?php echo($hdn); ?>;" id="basic_txt1">

			<label id="basic_txt" style="font-size:10px;color:#FF3333; display:<?php echo($hdn); ?>;">

				<input name="basic_grad_spec"  id="basic_grad_spec" type="text" class="textbox-registration"  style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;display:<?php echo($hdn); ?>; color:#999999;" placeholder="Specilization"  value="<?php if(isset($_SESSION['j20'])) { echo $_SESSION['j20']; } ?>"   onFocus="if(this.value=='Specilization') { this.value=''; document.getElementById('basic_grad_spec').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='Specilization'; document.getElementById('basic_grad_spec').style.color='#999999'; }"  />

			</label>

			

				<input type="text" name="ugclgname" id="ugclgname" style="margin:0px 0px 0px 2px;height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College name" value="<?php if(isset($_SESSION['j33'])) { echo $_SESSION['j33']; } ?>" class="textbox-registration" onFocus="if(this.value=='College name') { this.value=''; document.getElementById('ugclgname').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College name'; document.getElementById('ugclgname').style.color='#999999'; }" >

				<br>

				<input type="text" name="ugclgloc" id="ugclgloc" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College location" value="<?php if(isset($_SESSION['j30'])) { echo $_SESSION['j30']; } ?>" class="textbox-registration" onFocus="if(this.value=='College location') { this.value=''; document.getElementById('ugclgloc').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College location'; document.getElementById('ugclgloc').style.color='#999999'; }" >

			</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<?php $notpost_graduationresult=mysql_fetch_array(mysql_query("select * from post_graduation where degree='Not Pursuing Post Graduation'")); ?>

			<input type="hidden" name="hidnot_pggrad" id="hidnot_pggrad" value="<?php echo $notpost_graduationresult['id']; ?>">

			<select name="post_grad" style="height:40px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="selectbox-registration" onChange="pgspec(this.value)">

			<option value="0"> Post Graduation </option>

			<?php 

			$hdn1="";

			if(isset($_SESSION['j21']))

				{ 

			if($_SESSION['j21']==0)

			{

				?>

					<option value="0"> Post Graduation </option>

			<?php }

			else

			{

				?>

				

			<option value="<?php echo $_SESSION['j21']; ?>" selected><?php echo $_SESSION['j211']; ?></option> 

			<?php

			}

			

			

				

		$hdn1="block";

		}

else

{

	$hdn1="none";

}	?>

			<option value="<?php echo $notpost_graduationresult['id']; ?>">Not Pursuing Post Graduation</option>

			<?php $post_graduationresult=mysql_query("select * from post_graduation where degree!='Not Pursuing Post Graduation'");

			while($post_graduationresultrow=mysql_fetch_array($post_graduationresult))

			{

				

			if($pgcourse==$post_graduationresultrow['id'])

			{

			?>

<option value="<?php echo $post_graduationresultrow['id'];?>" selected="selected"> <?php echo $post_graduationresultrow['degree'];?> </option>

<?php }

			else 

			{

			?>

			<option value="<?php echo $post_graduationresultrow['id'];?>">

				<?php echo $post_graduationresultrow['degree'];?>

			</option>

			<?php	

			} } 

			?>

			</select>

		</td>

		

	</tr>

	

	<tr>

		<td align="center" colspan="4">

			

			<div style="width:95%; clear:both; display:<?php echo($hdn1); ?>;" id="pg_txt1">

			<label id="post_txt" style="font-size:10px; color:#FF3333; display:<?php echo($hdn1); ?>;">

				<input name="post_grad_spec" id="post_grad_spec" type="text" class="textbox-registration"  style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;display:<?php echo($hdn1); ?>; color:#999999;" placeholder="Specilization" value="<?php if(isset($_SESSION['j22'])) { echo $_SESSION['j22']; } ?>" onFocus="if(this.value=='Specilization') { this.value=''; document.getElementById('post_grad_spec').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='Specilization'; document.getElementById('post_grad_spec').style.color='#999999'; }"  />

			</label>

			

				<input type="text" name="pgclgname" id="pgclgname" style="margin:0px 0px 0px 2px;height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College name" value="<?php if(isset($_SESSION['j34'])) { echo $_SESSION['j34']; } ?>" class="textbox-registration" onFocus="if(this.value=='College name') { this.value=''; document.getElementById('pgclgname').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College name'; document.getElementById('pgclgname').style.color='#999999'; }" >

				<br>

				<input type="text" name="pgclgloc" id="pgclgloc" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College location" value="<?php if(isset($_SESSION['j31'])) { echo $_SESSION['j31']; } ?>" class="textbox-registration" onFocus="if(this.value=='College location') { this.value=''; document.getElementById('pgclgloc').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College location'; document.getElementById('pgclgloc').style.color='#999999'; }" >

			</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<?php $not_doctrateresult=mysql_fetch_array(mysql_query("select * from doctrate where degree='Not Pursuing Doctorate/Phd'")); ?>

			<input type="hidden" name="hidnot_postpggrad" id="hidnot_postpggrad" value="<?php echo $not_doctrateresult['id']; ?>">

			<select name="doctorate" style="height:40px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="selectbox-registration" onChange="doctspec(this.value)">

			<option value="0"> Doctorate/P.hd </option>

			<?php

	

	if(isset($_SESSION['j23'])) 

			{ 

		

		if($_SESSION['j23']==0)

		{

			?>

			<option value="0"> Doctorate/P.hd </option>

			<?php

		}

		else

		{

		

		?>

		<option value="<?php echo $_SESSION['j23']; ?>" selected><?php echo $_SESSION['j231']; ?> </option> 

			

			<?php }

			}

	?>

			<option value="<?php echo $not_doctrateresult['id']; ?>">Not Pursuing Doctorate/Phd</option>

			<?php $doctrateresult=mysql_query("select * from doctrate where degree!='Not Pursuing Doctorate/Phd'");

			while($doctrateresultrow=mysql_fetch_array($doctrateresult))

			{if($post_pgcourse==$doctrateresultrow['id'])

			{

			?>

			<option value="<?php echo $doctrateresultrow['id'];?>" selected="selected"> <?php echo $doctrateresultrow['degree'];?> </option>

			<?php }

			else 

			{

			?>

			<option value="<?php echo $doctrateresultrow['id'];?>"> <?php echo $doctrateresultrow['degree'];?> </option>

			<?php	}} ?>

			</select>

		</td>

	</tr>

	

	<tr>

		<td align="center" colspan="4">

			

			<div style="width:95%; clear:both; display:none;" id="postpg_txt1">

			<label id="doct_txt" style="font-size:10px; color:#FF3333; display:none;">

				<input name="doct_spec" id="doct_spec" type="text" class="textbox-registration"  style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;display:none; color:#999999;" placeholder="Specilization" value="<?php if(isset($_SESSION['j24'])) { echo $_SESSION['j24']; } ?>" onFocus="if(this.value=='Specilization') { this.value=''; document.getElementById('doct_spec').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='Specilization'; document.getElementById('doct_spec').style.color='#999999'; }"  />

			</label>

			

				<input type="text" name="postpgclgname" id="postpgclgname" style="margin:0px 0px 0px 2px;height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College name"  value="<?php if(isset($_SESSION['j35'])) { echo $_SESSION['j35']; } ?>" class="textbox-registration" onFocus="if(this.value=='College name') { this.value=''; document.getElementById('postpgclgname').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College name'; document.getElementById('postpgclgname').style.color='#999999'; }" >

				<br>

				<input type="text" name="postpgclgloc" id="postpgclgloc" style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;color:#999999;" placeholder="College location" value="<?php if(isset($_SESSION['j32'])) { echo $_SESSION['j32']; } ?>" class="textbox-registration" onFocus="if(this.value=='College location') { this.value=''; document.getElementById('postpgclgloc').style.color='#000000'; }" onBlur="if(this.value=='') { this.value='College location'; document.getElementById('postpgclgloc').style.color='#999999'; }" >

			</div>

		</td>

	</tr>-->

	

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Professional Details<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i4" onclick="mn4()"/><img src='plus.jpg' onclick="mn44()" style="width:20px;height:20px;" id="i44"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	<div id="scs3" style="display:none;">

	<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<select name="year" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Total Experience In Years </option>

			<?php 

			if(isset($_SESSION['j12']))

				{ ?>

			<option selected><?php echo $_SESSION['j12']." Years"; ?> </option> 

			<?php

			}  for($i=0;$i<=20;$i++){ 

			

			if($i==0 || $i==1)

			{

				?>

				

			<option value='<?php echo $i; ?>'><?php echo $i." Year"; ?></option>

				<?php

			}

			else{

				

			

			?>

			<option value='<?php echo $i; ?>'><?php echo $i." Years"; ?></option>

			<?php



			}

				} ?>

			</select>

			&nbsp;

			<select name="month" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Total Experience In Months </option>

			<?php 

			if(isset($_SESSION['j13']))

				{

					?>

					

					<option selected><?php echo $_SESSION['j13']." Months"; ?></option>



<?php			} 

			for($i=0;$i<=11;$i++){ 

			

			if($i==0 || $i==1)

			{

				?>

				

			<option value='<?php echo $i; ?>'><?php echo $i." Month"; ?></option>

				<?php

			}

			else

			{

				

			

			?>

			<option value='<?php echo $i; ?>'><?php echo $i." Months"; ?></option>

			<?php 

			}

				} ?>

			</select>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<select name="curr_industry" class="selectbox-registration" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;">

			<?php 

			if(isset($_SESSION['j15']))

				{ ?>

			<option value="<?php echo $_SESSION['j15']; ?>" selected><?php echo $_SESSION['j151']; ?> </option> 

			<?php

			} ?>

				<option value=""> Current Industry </option>

				

		<?php $industryresult=mysql_query("select * from job_seeker_itype");

		while($industryresultresultrow=mysql_fetch_array($industryresult))

				{

				?>

				<option value="<?php echo $industryresultresultrow['id'];?>">

					<?php echo $industryresultresultrow['itype'];?>

				</option>

				<?php } ?>

			</select>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

		

			<select name="function_area" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;" class="selectbox-registration">

			<?php

			if(isset($_SESSION['j14']))

				{ ?>

			<option value="<?php echo $_SESSION['j14']; ?>" selected><?php echo $_SESSION['j141']; ?> </option> 

			<?php } ?>

			<option value=""> Functional Area </option>

				<?php 

					$functional_arearesult=mysql_query("select * from job_seeker_farea");

					while($functional_arearesultrow=mysql_fetch_array($functional_arearesult))

					{ 

				?>

				<option value="<?php echo $functional_arearesultrow['id'];?>"> <?php echo $functional_arearesultrow['farea'];?> </option>

				<?php } ?>

			</select>

		</td>

	</tr>

	

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<select name="ctcl" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Current CTC In Lakhs </option>

			<?php 

			if(isset($_SESSION['j37']))

				{ ?>

			<option value="<?php echo $_SESSION['j37']; ?>" selected><?php echo $_SESSION['j37']." Lakhs"; ?> </option> 

			<?php

			}  for($i=0;$i<=50;$i++){ 

			

			if($i==0 || $i==1)

			{

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakh"; ?></option>

			<?php

			}

			else

			{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakhs"; ?></option>

			<?php

			}

			} ?>

			

			<option value="51">50 and above</option>

			</select>

			&nbsp;

			<select name="ctct" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Current CTC In Thousands </option>

			<?php 

			if(isset($_SESSION['j38']))

				{

					?>

					

					<option value="<?php echo $_SESSION['j38'];?>" selected><?php echo $_SESSION['j38']." Thousands"; ?></option>



<?php			} 

			for($i=0;$i<=99;$i++){ 

			if($i==0 || $i==1)

			{

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousand"; ?></option>

			<?php

			}

			else

			{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousands"; ?></option>

			<?php

			}

			} ?>

			</select>

		</td>

	</tr>

	

	

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<select name="expl" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Expected CTC In Lakhs </option>

			<?php 

			if(isset($_SESSION['j39']))

				{ ?>

			<option value="<?php echo $_SESSION['j39']; ?>" selected><?php echo $_SESSION['j39']." Lakhs"; ?> </option> 

			<?php

			}  for($i=0;$i<=50;$i++){ 

			if($i==0 || $i==1)

			{

				

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakh"; ?></option>

			<?php

				

			}

			else{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakhs"; ?></option>

			<?php

			}

			} ?>

			

			<option value="51">50 and above</option>

			</select>

			&nbsp;

			<select name="explt" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Expected CTC In Thousands </option>

			<?php 

			if(isset($_SESSION['j40']))

				{

					?>

					

					<option value="<?php echo $_SESSION['j40']; ?>" selected><?php echo $_SESSION['j40']." Thousands"; ?></option>



<?php			} 

			for($i=0;$i<=99;$i++){

				if($i==0 || $i==1)

			{

				

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousand"; ?></option>

			<?php

				

			}

			else

			{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousands"; ?></option>

			<?php

			}

			} ?>

			</select>

		</td>

	</tr>

	

	

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	<tr>

		<td align="center" colspan="4">

		<div style="height:40px;width:95%;border-radius:3px;"><div style="float:left;margin:4px 0px 0px 0px;color:grey;font-size:14px;">Currently Serving Notice Period

			<input type="radio" id="npyes" name="cnp" value="Yes"  onclick="yesr()" style="width:25px;height:25px;" onchange="yesr()" />

			<label for="npyes">YES</label>

			

			&nbsp;&nbsp;&nbsp;&nbsp;

			

			<input type="radio" id="npno" name="cnp" value="No" checked="checked" onclick="yesn()" style="width:25px;height:25px;" onchange="yesn()" />

			<label for="npno">No</label>

		</div>

		</div></td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td colspan="4" align="center">

		<div id="r3" style="display:none;">

			<input name="npdate" id="npdate" type="text" pattern='[0-9]{2}[/]{1}[0-9]{2}[/]{1}[0-9]{4,4}' title='You should follow the required format eg : MM/DD/YYYY' style="height:30px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" placeholder="Releaving date from the current company"   onBlur="this.value=trim(this.value);" />

		</div>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	



	

	<tr>

		<td align="center" colspan="4">

		

			<select name="notice" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;"  class="selectbox-registration">

			

			

			<option>  Notice Period </option>

			

			<?php

			if(isset($_SESSION['j36']))

				{ ?>

			<option selected><?php echo $_SESSION['j36']; ?> </option> 

			<?php } ?>

				<option>Immediate</option>

			

				<option>One Week</option>

			

				<option>Two Weeks</option>

			

				<option>Three Weeks</option>

			

				<option>One Month</option>

			

				<option>45 Days</option>

			

				<option>Two Months</option>

			

				<option>Three Months</option>

			

			</select>

		</td>

		<!--<td><span style="color:orange;text-decoration:underline;" title="Notice period is the time period  you need to work in the current company from the date of your resignation, till your releaving date. Which has been defined by the current company in your offer letter. ">Help?</span></td>

	-->

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	

	<tr>

		<td align="center" colspan="4">

		

			<select name="coffers" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;"  class="selectbox-registration" id="of" onchange="offers()">

			

			<option value="">  Current Offers In Hand </option>

				<?php 

				for($j=0;$j<=5;$j++)

				{

					if($j==1)

					{

						?>

						

					<option value="<?php echo($j); ?>"><?php echo($j." Offer in hand "); ?></option>

						

						<?php

					}

					else

					{

						?>

						

					<option value="<?php echo($j); ?>"><?php echo($j." Offers in hand "); ?></option>

						

						<?php

					}

				}

				

					?>

			</select>

		

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	

	

	<tr>

		<td align="center" colspan="4">

		<div id="w3" style="display:none;">

			<select name="bol" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Best Offered CTC In Lakhs </option>

			<?php 

			for($i=0;$i<=50;$i++){ 

			if($i==0 || $i==1)

			{

				

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakh"; ?></option>

			<?php

				

			}

			else{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Lakhs"; ?></option>

			<?php

			}

			} ?>

			

			<option value="51">50 and above</option>

			</select>

			&nbsp;

			<select name="bot" style="height:40px;border:1px solid lightgrey;width:47.5%;border-radius:3px;">

			<option value=""> Best Offered CTC In Thousands </option>

			<?php 

			for($i=0;$i<=99;$i++){

				if($i==0 || $i==1)

			{

				

				

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousand"; ?></option>

			<?php

				

			}

			else

			{

				

			

			?>

			<option value="<?php echo $i; ?>"><?php echo $i." Thousands"; ?></option>

			<?php

			}

			} ?>

			</select>

			</div>

		</td>

	</tr>

	

	

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

		

			<select name="tow" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;"  class="selectbox-registration" id="of" onchange="offers()">

			

			<option value="">  Type Of Work </option>

				<option>Full Time</option>

				<option>Part Time</option>

				<option>Contract</option>

				

				<option>Hourly Based</option>

				

			</select>

		

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

		

			<select name="reloc" style="height:40px;border:1px solid lightgrey;width:97%;border-radius:3px;"  class="selectbox-registration" id="of" onchange="offers()">

			

			<option value="0">  Will You Relocate </option>

				<option value="1">Yes</option>

				<option value="2">No</option>

				

			</select>

		

		</td>

	</tr>

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	

	

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Skill Sets<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i4as" onclick="mn4as()"/><img src='plus.jpg' onclick="mn44as()" style="width:20px;height:20px;" id="i44as"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	<div id="scs3as" style="display:none;">

	<table width="100%">

	

	<tr><td colspan="4">&nbsp;</td></tr>

	<tr>

		<td align="center" colspan="4">

			<textarea name="keyskills" id="keyskills" pattern='[a-zA-Z0-9+#+&+,+ .-]{8,100}' title='Please enter proper skill sets' placeholder="Current Skill Sets" style="height:50px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" pattern="[A-Za-z0-9+,+ ]{2,30}" title="Please enter proper current skill sets"  onBlur="this.value=trim(this.value);"><?php if(isset($_SESSION['skills'])) { echo $_SESSION['skills']; } ?></textarea>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<textarea name="skillint" id="skillint" class="textbox-registration" pattern='[a-zA-Z0-9+#+&+,+ .-]{8,100}' title='Please enter proper skill sets you are interested' placeholder="Skill Sets you are interested to work for" style="height:50px;border:1px solid lightgrey;width:95%;border-radius:3px;" pattern="[A-Za-z0-9+,+ ]{2,30}" title="Please enter proper skill sets interested work for"  onBlur="this.value=trim(this.value);"></textarea>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<textarea name="skilllearn" id="skilllearn" placeholder="Skill Sets you want to learn" pattern='[a-zA-Z0-9+#+&+,+ .-]{8,100}' title='Please enter proper skill sets you want to learn' style="height:50px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" pattern="[A-Za-z0-9+,+ ]{2,30}" title="Please enter proper  skill sets you want to learn"  onBlur="this.value=trim(this.value);"></textarea>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Upload Audio Video resume<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i5" onclick="mn5()"/><img src='plus.jpg' onclick="mn55()" style="width:20px;height:20px;" id="i55"/></span>&nbsp;

		</div>

		</td>

	</tr>

</table>

<div id="scs4" style="display:none;">

<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

			<textarea name="res_title" placeholder="Resume Headline" pattern='[a-zA-Z+&+,+ .-]{4,20}' title='Please enter proper resume headline' style="height:50px;border:1px solid lightgrey;width:95%;border-radius:3px;" class="textbox-registration" pattern="[A-Za-z0-9+,+ ]{2,30}" title="Please enter correct resume headline" onBlur="this.value=trim(this.value);" ><?php if(isset($_SESSION['j17'])) { echo $_SESSION['j17']; } ?></textarea>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	

	<tr>

		<td align="center" colspan="4">

		<div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:4px 0px 0px 0px;color:grey;font-size:14px;">&nbsp;Upload Audio Resume

			<input type="file" name="audiof"  id="audiof" class="textbox-registration" onBlur="this.value=trim(this.value);" />

			</div>

			</div>

		</td>

		<!--<td><font color="#999999">Supported Formats: all, Max file size: 2 MB</font></td>-->

	</tr>

		

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	<tr>

		<td align="center" colspan="4"><div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:4px 0px 0px 0px;color:grey;font-size:14px;">&nbsp;Upload Video Resume

			<input type="file" name="videof" id="videof" placeholder="Upload Video Resume"  class="textbox-registration" onBlur="this.value=trim(this.value);" />

		</div>

		</div>

		</td>

		<!--<td><font color="#999999">Supported Formats: all Max file size: 4 MB</font></td>-->

	</tr>

		

	<tr><td colspan="4">&nbsp;</td></tr>

	

	</table>

	</div>

	<table width="100%">

	<tr>

		<td colspan="4" class="registerhead" style="background-color:#E8E8E8;height:30px;"><div style="margin:4px 0px 0px 0px;">

			Add Profile Image<span style="float:right;"><img src='minus.jpg' style="width:20px;height:20px;display:none;" id="i6" onclick="mn6()"/><img src='plus.jpg' onclick="mn66()" style="width:20px;height:20px;" id="i66"/></span>&nbsp;

		</div>

		</td>

	</tr>

	</table>

	<div id="scs5" style="display:none;">

	<table width="100%">

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr>

		<td align="center" colspan="4">

		

		<div style="height:40px;border:1px solid lightgrey;width:96.5%;border-radius:3px;"><div style="float:left;margin:4px 0px 0px 0px;color:grey;font-size:14px;">&nbsp;Upload Your Photo

			<input type="file" name="nusr_photo"  id="nusr_photo" class="textbox-registration" onChange="return photo_upload(this);" onBlur="this.value=trim(this.value);"/>

		</div>

		</div>

		</td>

		<!--<td><font color="#999999">Supported Formats: jpg, png and gif Max file size: 5 MB</font></td>-->

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	

	<tr>

		<td colspan="4" align="center">

			<input name="mailalert" id="mailalert" type="hidden" value="1"/>

		</td>

	</tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	</table>

	</div>

	<table width="100%">

	<tr><td colspan="4"></td></tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

	

	<tr><td colspan="4" align="center"><input type="submit" name="sub" id="sub" value="Update My Account" class="gobtn toosmallbtn" style="line-height:24px;" /></td></tr>

	

	<tr><td colspan="4">&nbsp;</td></tr>

</table>

	  

	  </form>

			</div>

		

        

  </div>

  

     </center>

	 

	<br/>

  </div>

  

  

  

  

  

  

   <style type="text/css"> .sidbr { float: right; } </style>

  <?php

  

 /* include("includes/bottomright.php")

include("includes/topright1.php")*/

  

   ?> 

  

<div class="grid_12">&nbsp;</div>

 	

	<!-- Info boxes -->

	<?php

	

	//include("includes/services.php");

	

	 ?>

	<!-- End of Info boxes -->



	<p>&nbsp;</p>

	<div class="clear">&nbsp;</div>

	









<!-- Subfooter -->

<?php 



//include("includes/subfooter.php");



?>

<!-- End of Subfooter -->



<!-- Footer -->

<?php 



//include("includes/footer.php");



?>



<!-- End of Footer -->



<!-- Scroll to top link -->

<?php



require_once("newfooter.php");



?>

<a href="#" id="totop" class="radius" title="back to top"><img src="img/top.png" alt="back to top" /></a>











<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 958974492;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/958974492/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>




<script>
if(window.location.pathname.indexOf('/newregister2.php')!=-1)
{
if(document.referrer.indexOf('/newregsave.php')>-1){
(new (Image)).src ="//www.googleadservices.com/pagead/conversion/958974492/?label=7kT0CIydjFwQnJSjyQM&guid=ON&script=0";
}
}
</script>
</body>

</html>




