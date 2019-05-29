<html>
<body>
<script>
	var url = new URL(window.location.href);
	var code = url.searchParams.get("html");
	document.write(unescape(code));
	window.print();
</script>
</body>
</html>