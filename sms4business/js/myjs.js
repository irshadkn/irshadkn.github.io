function show() {
	document.getElementById("subscribeScreen").style.display = "block";
}
function hide() {
    document.getElementById("subscribeScreen").style.display = "none";
}
function updateURL() {
    var vname = document.getElementById('visitor_name').value;
    var vnum = document.getElementById('visitor_num').value;
    var newurl = "http://sms.vstcbe.com/index.php/smsapi/httpapi/?uname=karpagavinayagar&password=9788001122&sender=VSTCBE&receiver=" + vnum + "&route=TA&msgtype=1&sms=Dear%20" + vname + ",%20Welcome%20to%20SMS4Business!%20If%20you%20have%20any%20query,%20please%20contact%209788001122.";
    document.getElementById("subscribeScreen").style.display = "none";
        var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", newurl);
        ifrm.style.width = "0";
        ifrm.style.height = "0";
        document.body.appendChild(ifrm);
}