<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head inertia>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
		@vite
	</head>
	<body class="antialiased">
    <section class="">
        @inertia

    </section>
	</body>
</html>
