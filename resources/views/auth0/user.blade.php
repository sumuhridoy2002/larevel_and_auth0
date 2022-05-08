<!DOCTYPE html>
<html>
    <body>
        <p>Welcome! You are authenticated. <a href="{{ route('logout') }}">Log out</a></p>
        <div>
            <pre><?php print_r(auth()->user()) ?></pre>
        </div>
    </body>
</html>