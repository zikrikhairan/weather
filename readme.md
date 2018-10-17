<p align="center">
    <h1>Weather with API MetaWeather using Laravel</h1>
</p>

A simple weather information implementation with Laravel Framework using API from <a href="https://www.metaweather.com/">MetaWeather</a>.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## About MetaWeather

<blockquote>
    <p>
        <strong>meta-</strong><br>
        <em>pref.</em> Beyond; transcending; more comprehensive<br>
        <strong>weather</strong><br>
        <em>n.</em> The state of the atmosphere at a given time and place
    </p>
</blockquote>
<p>MetaWeather is an automated weather data aggregator that takes the weather predictions from various forecasters and calculates the most likely outcome.</p>
<p>The thinking is that the combined knowledge of the forecasters will produce a better prediction.</p>
<h3>The Story</h3>
<p>I (Jason) was going to a friend's wedding which was partially outdoors in the climatically unpredictable UK. When checking the weather forecast I wondered if I should check another forecaster to see what they predicted - a thought process that lead me to check a number of sites. A couple of poorly written PHP scripts, clunky MySQL database and a few hours later I was crunching weather data from a bunch of sites.</p>
<p>I went on to build a frontend and have since collected nearly a billion forecast &amp; observation data points, as of early 2017. This is the second version of the site, revamped using more robust tech.</p>

## Install

<ul>
    <li>Create a database locally named <code>weather</code> utf8_general_ci</li>
    <li>Download composer <a href="https://getcomposer.org/download/" rel="nofollow">https://getcomposer.org/download/</a></li>
    <li>Clone this repository from <a>https://github.com/zikrikhairan/weather.git</a>.</li>
    <li>Rename <code>.env.example</code> file to <code>.env</code>inside your project root and fill the database information.
    </li>
    <li>Open the console and cd your project root directory</li>
    <li>Run <code>composer install</code></li>
    <li>Run <code>php artisan key:generate</code></li>
    <li>Run <code>php artisan migrate</code></li>
    <li>Run <code>php artisan serve</code></li>
</ul>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
