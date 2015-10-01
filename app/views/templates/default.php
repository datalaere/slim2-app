<!DOCTYPE html>
<!--
MINI MVC
-->
<html lang="en">
	<head>
		<title>Website | {% block title %}{% endblock %}</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		{% include 'templates/partials/feedback.php' %}
		{% include 'templates/partials/nav.php' %}
		{% block content %} {% endblock %}
	</body>
</html>
