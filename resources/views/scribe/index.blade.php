<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>OneNex API Docs</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/vendor/scribe/css/theme-default.style.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/vendor/scribe/css/theme-default.print.css') }}" media="print">
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
        body .content .bash-example code {
            display: none;
        }

        body .content .javascript-example code {
            display: none;
        }
    </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset('/vendor/scribe/js/tryitout-4.22.0.js') }}"></script>

    <script src="{{ asset('/vendor/scribe/js/theme-default-4.22.0.js') }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

    <a href="#" id="nav-button">
        <span>
            MENU
            <img src="{{ asset('/vendor/scribe/images/navbar.png') }}" alt="navbar-image" />
        </span>
    </a>
    <div class="tocify-wrapper">

        <div class="lang-selector">
            <button type="button" class="lang-button" data-language-name="bash">bash</button>
            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
        </div>

        <div class="search">
            <input type="text" class="search" id="input-search" placeholder="Search">
        </div>

        <div id="toc">
            <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
            </ul>
            <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
            </ul>
            <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                        <a href="#endpoints-POSTapi-register">Register api</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                        <a href="#endpoints-POSTapi-login">Login api</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movie-list">
                        <a href="#endpoints-GETapi-movie-list">Display a listing of the resource.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-movie-detail--id-">
                        <a href="#endpoints-GETapi-movie-detail--id-">Display the specified resource.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movie-store">
                        <a href="#endpoints-POSTapi-movie-store">Store a newly created resource in storage.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movie-update">
                        <a href="#endpoints-POSTapi-movie-update">Update the specified resource in storage.</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-movie-destroy">
                        <a href="#endpoints-POSTapi-movie-destroy">Remove the specified resource from storage.</a>
                    </li>
                    
                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-public-movie-list">
                        <a href="#endpoints-GETapi-public-movie-list">GET api/public/movie/list</a>
                    </li>
                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-public-movie-comment">
                        <a href="#endpoints-POSTapi-public-movie-comment">Store a newly created resource in storage.</a>
                    </li>
                </ul>
            </ul>
        </div>

        <ul class="toc-footer" id="toc-footer">
            <li style="padding-bottom: 5px;"><a href="{{ route('scribe.postman') }}">View Postman collection</a></li>
            <li style="padding-bottom: 5px;"><a href="{{ route('scribe.openapi') }}">View OpenAPI spec</a></li>
            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
        </ul>

        <ul class="toc-footer" id="last-updated">
            <li>Last updated: August 11, 2023</li>
        </ul>
    </div>

    <div class="page-wrapper">
        <div class="dark-box"></div>
        <div class="content">
            <h1 id="introduction">Introduction</h1>
            <aside>
                <strong>Base URL</strong>: <code>http://127.0.0.1:8000/</code>
            </aside>
            <p>This documentation aims to provide all the information you need to work with our API.</p>
            <aside>As you scroll, you'll see code examples for working with the API in different programming languages
                in the dark area to the right (or as part of the content on mobile).
                You can switch the language used with the tabs at the top right (or from the nav menu at the top left on
                mobile).</aside>

            <h1 id="authenticating-requests">Authenticating requests</h1>
            <p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value
                <strong><code>"Bearer your-token"</code></strong>.</p>
            <p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the
                documentation below.</p>
            <p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

            <h1 id="endpoints">Endpoints</h1>



            <h2 id="endpoints-POSTapi-register">Register api</h2>


            <span id="example-requests-POSTapi-register">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/register" \
    --header "Authorization: Bearer d3agEZP4vefkb6hcV685aD1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"exercitationem\",
    \"email\": \"bernie08@example.net\",
    \"password\": \"officia\",
    \"c_password\": \"nisi\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

const headers = {
    "Authorization": "Bearer d3agEZP4vefkb6hcV685aD1",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "exercitationem",
    "email": "bernie08@example.net",
    "password": "officia",
    "c_password": "nisi"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-register">
                <blockquote>
                    <p>Example response (404):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Validation Error.&quot;,
    &quot;data&quot;: {
        &quot;c_password&quot;: [
            &quot;The c password and password must match.&quot;
        ]
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-register" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-register" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
                
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-register" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/register</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
               
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTapi-register"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-register"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="name" data-endpoint="POSTapi-register"
                        value="exercitationem" data-component="body">
                    <br>
                    <p>Example: <code>exercitationem</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email" data-endpoint="POSTapi-register"
                        value="bernie08@example.net" data-component="body">
                    <br>
                    <p>Must be a valid email address. Example: <code>bernie08@example.net</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="password" data-endpoint="POSTapi-register"
                        value="officia" data-component="body">
                    <br>
                    <p>Example: <code>officia</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>c_password</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="c_password" data-endpoint="POSTapi-register"
                        value="nisi" data-component="body">
                    <br>
                    <p>The value and <code>password</code> must match. Example: <code>nisi</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-login">Login api</h2>


            <span id="example-requests-POSTapi-login">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/login" \
    --header "Authorization: Bearer kP5af6V6aEc41Dhvge8bZ3d" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

const headers = {
    "Authorization": "Bearer kP5af6V6aEc41Dhvge8bZ3d",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-login">
                <blockquote>
                    <p>Example response (404):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;message&quot;: &quot;Unauthorised.&quot;,
    &quot;data&quot;: {
        &quot;error&quot;: &quot;Unauthorised&quot;
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-login" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-login" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-login" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/login</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
               
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type" data-endpoint="POSTapi-login"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-login"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                    <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                    <div style=" padding-left: 28px;  clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                        <small>string</small>&nbsp;
                        &nbsp;
                        <input type="email" style="display: block;" name="email" data-endpoint="POSTapi-login" value="exercitationem" data-component="body">
                        <br>
                        <p>Example: <code>nyinyi@gmail.com</code></p>
                    </div>
                    <div style=" padding-left: 28px;  clear: unset;">
                        <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
                        <small>string</small>&nbsp;
                        &nbsp;
                        <input type="text" style="display: block;" name="password" data-endpoint="POSTapi-login" value="exercitationem" data-component="body">
                        <br>
                        <p>Example: <code>12345678</code></p>
                    </div>
                </div>
            </form>

            <h2 id="endpoints-GETapi-movie-list">Display a listing of the resource.</h2>



            <span id="example-requests-GETapi-movie-list">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/movie/list" \
    --header "Authorization: Bearer hDa85beEvg13a64ZPkfd6cV" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/movie/list"
);

const headers = {
    "Authorization": "Bearer hDa85beEvg13a64ZPkfd6cV",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-movie-list">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-movie-list" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-movie-list"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-movie-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-movie-list" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-movie-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-movie-list" data-method="GET" data-path="api/movie/list" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-movie-list', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-movie-list" onclick="tryItOut('GETapi-movie-list');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-movie-list" onclick="cancelTryOut('GETapi-movie-list');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-movie-list" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/movie/list</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="GETapi-movie-list" value="Bearer hDa85beEvg13a64ZPkfd6cV"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer hDa85beEvg13a64ZPkfd6cV</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-movie-list" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="GETapi-movie-list"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETapi-movie-detail--id-">Display the specified resource.</h2>

            <p>
                <small class="badge badge-darkred">requires authentication</small>
            </p>



            <span id="example-requests-GETapi-movie-detail--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/movie/detail/sequi" \
    --header "Authorization: Bearer 4vgecd6kfa1a8Z356hbEPVD" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/movie/detail/sequi"
);

const headers = {
    "Authorization": "Bearer 4vgecd6kfa1a8Z356hbEPVD",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-movie-detail--id-">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-movie-detail--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-movie-detail--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-movie-detail--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-movie-detail--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-movie-detail--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-movie-detail--id-" data-method="GET" data-path="api/movie/detail/{id}"
                data-authed="1" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-movie-detail--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-movie-detail--id-" onclick="tryItOut('GETapi-movie-detail--id-');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-movie-detail--id-"
                        onclick="cancelTryOut('GETapi-movie-detail--id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-movie-detail--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/movie/detail/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="GETapi-movie-detail--id-" value="Bearer 4vgecd6kfa1a8Z356hbEPVD"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer 4vgecd6kfa1a8Z356hbEPVD</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-movie-detail--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-movie-detail--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="id"
                        data-endpoint="GETapi-movie-detail--id-" value="sequi" data-component="url">
                    <br>
                    <p>The ID of the detail. Example: <code>sequi</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-movie-store">Store a newly created resource in storage.</h2>

            <p>
                <small class="badge badge-darkred">requires authentication</small>
            </p>



            <span id="example-requests-POSTapi-movie-store">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/movie/store" \
    --header "Authorization: Bearer vZPa1gc65aDb6kd34f8VhEe" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"voluptas\",
    \"summary\": \"libero\",
    \"genres\": \"blanditiis\",
    \"author\": \"quod\",
    \"tags\": \"id\",
    \"imdb\": \"sit\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/movie/store"
);

const headers = {
    "Authorization": "Bearer vZPa1gc65aDb6kd34f8VhEe",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptas",
    "summary": "libero",
    "genres": "blanditiis",
    "author": "quod",
    "tags": "id",
    "imdb": "sit"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-movie-store">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-movie-store" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-movie-store"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-movie-store"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-movie-store" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-movie-store">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-movie-store" data-method="POST" data-path="api/movie/store" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-movie-store', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-movie-store" onclick="tryItOut('POSTapi-movie-store');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-movie-store" onclick="cancelTryOut('POSTapi-movie-store');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-movie-store" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/movie/store</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="POSTapi-movie-store" value="Bearer vZPa1gc65aDb6kd34f8VhEe"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer vZPa1gc65aDb6kd34f8VhEe</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-movie-store" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-movie-store"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="title" data-endpoint="POSTapi-movie-store"
                        value="voluptas" data-component="body">
                    <br>
                    <p>Example: <code>voluptas</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="summary" data-endpoint="POSTapi-movie-store"
                        value="libero" data-component="body">
                    <br>
                    <p>Example: <code>libero</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="genres" data-endpoint="POSTapi-movie-store"
                        value="blanditiis" data-component="body">
                    <br>
                    <p>Example: <code>blanditiis</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="author" data-endpoint="POSTapi-movie-store"
                        value="quod" data-component="body">
                    <br>
                    <p>Example: <code>quod</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>tags</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="tags[]" data-endpoint="POSTapi-movie-store"
                        value="id" data-component="body">
                    <br>
                    <p>Example: <code>id</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>imdb</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" name="imdb" data-endpoint="POSTapi-movie-store"
                        value="sit" data-component="body">
                    <br>
                    <p>Example: <code>6.0</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-movie-update">Update the specified resource in storage.</h2>

            <p>
                <small class="badge badge-darkred">requires authentication</small>
            </p>



            <span id="example-requests-POSTapi-movie-update">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/movie/update" \
    --header "Authorization: Bearer cdPZE48D6vhf1g3Veak6ab5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"sed\",
    \"summary\": \"et\",
    \"genres\": \"vitae\",
    \"author\": \"voluptatem\",
    \"tags\": \"dolorem\",
    \"imdb\": \"totam\",
    \"id\": \"aliquam\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/movie/update"
);

const headers = {
    "Authorization": "Bearer cdPZE48D6vhf1g3Veak6ab5",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "sed",
    "summary": "et",
    "genres": "vitae",
    "author": "voluptatem",
    "tags": "dolorem",
    "imdb": "totam",
    "id": "aliquam"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-movie-update">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-movie-update" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-movie-update"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-movie-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-movie-update" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-movie-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-movie-update" data-method="POST" data-path="api/movie/update" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-movie-update', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-movie-update" onclick="tryItOut('POSTapi-movie-update');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-movie-update" onclick="cancelTryOut('POSTapi-movie-update');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-movie-update" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/movie/update</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="POSTapi-movie-update" value="Bearer cdPZE48D6vhf1g3Veak6ab5"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer cdPZE48D6vhf1g3Veak6ab5</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-movie-update" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-movie-update"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="title" data-endpoint="POSTapi-movie-update"
                        value="sed" data-component="body">
                    <br>
                    <p>Example: <code>sed</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>summary</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="summary" data-endpoint="POSTapi-movie-update"
                        value="et" data-component="body">
                    <br>
                    <p>Example: <code>et</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>genres</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="genres" data-endpoint="POSTapi-movie-update"
                        value="vitae" data-component="body">
                    <br>
                    <p>Example: <code>vitae</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>author</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="author" data-endpoint="POSTapi-movie-update"
                        value="voluptatem" data-component="body">
                    <br>
                    <p>Example: <code>voluptatem</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>tags</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="tags[]" data-endpoint="POSTapi-movie-update"
                        value="dolorem" data-component="body">
                    <br>
                    <p>Example: <code>dolorem</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>imdb</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="number" style="display: none" name="imdb" data-endpoint="POSTapi-movie-update"
                        value="totam" data-component="body">
                    <br>
                    <p>Example: <code>9.0</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="id" data-endpoint="POSTapi-movie-update"
                        value="aliquam" data-component="body">
                    <br>
                    <p>Example: <code>aliquam</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-movie-destroy">Remove the specified resource from storage.</h2>

            <p>
                <small class="badge badge-darkred">requires authentication</small>
            </p>



            <span id="example-requests-POSTapi-movie-destroy">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/movie/destroy" \
    --header "Authorization: Bearer e53fZDa48vPdcE1habk6V6g" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"id\": \"consequatur\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/movie/destroy"
);

const headers = {
    "Authorization": "Bearer e53fZDa48vPdcE1habk6V6g",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-movie-destroy">
                <blockquote>
                    <p>Example response (401):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-movie-destroy" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-movie-destroy"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-movie-destroy"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-movie-destroy" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-movie-destroy">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-movie-destroy" data-method="POST" data-path="api/movie/destroy" data-authed="1"
                data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-movie-destroy', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-movie-destroy" onclick="tryItOut('POSTapi-movie-destroy');">Try it out
                        ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-movie-destroy" onclick="cancelTryOut('POSTapi-movie-destroy');"
                        hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-movie-destroy" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/movie/destroy</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="POSTapi-movie-destroy" value="Bearer e53fZDa48vPdcE1habk6V6g"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer e53fZDa48vPdcE1habk6V6g</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-movie-destroy" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept" data-endpoint="POSTapi-movie-destroy"
                        value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="id" data-endpoint="POSTapi-movie-destroy"
                        value="consequatur" data-component="body">
                    <br>
                    <p>Example: <code>consequatur</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETapi-downloadPdf--id-">GET api/downloadPdf/{id}</h2>

            <p>
                <small class="badge badge-darkred">requires authentication</small>
            </p>



            <span id="example-requests-GETapi-downloadPdf--id-">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/downloadPdf/sed" \
    --header "Authorization: Bearer E6ckbe63V81g5PhDZd4avfa" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/downloadPdf/sed"
);

const headers = {
    "Authorization": "Bearer E6ckbe63V81g5PhDZd4avfa",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-downloadPdf--id-">
                <blockquote>
                    <p>Example response (500):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Call to a member function toarray() on null&quot;,
    &quot;exception&quot;: &quot;Error&quot;,
    &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/app/Http/Controllers/API/MovieController.php&quot;,
    &quot;line&quot;: 251,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;createPDF&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\API\\MovieController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 43,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 260,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 205,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 798,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/sanctum/src/Http/Middleware/EnsureFrontendRequestsAreStateful.php&quot;,
            &quot;line&quot;: 25,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\{closure}&quot;,
            &quot;class&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/sanctum/src/Http/Middleware/EnsureFrontendRequestsAreStateful.php&quot;,
            &quot;line&quot;: 26,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 799,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 776,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 740,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 729,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 190,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 165,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 134,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 92,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 124,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 71,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 661,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 183,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 153,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1014,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 301,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 155,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/nyinyi/Desktop/work/onenex-coding-test/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-downloadPdf--id-" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-downloadPdf--id-"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-downloadPdf--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-downloadPdf--id-" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-downloadPdf--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-downloadPdf--id-" data-method="GET" data-path="api/downloadPdf/{id}"
                data-authed="1" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-downloadPdf--id-', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-downloadPdf--id-" onclick="tryItOut('GETapi-downloadPdf--id-');">Try it
                        out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-downloadPdf--id-"
                        onclick="cancelTryOut('GETapi-downloadPdf--id-');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-downloadPdf--id-" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/downloadPdf/{id}</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Authorization" class="auth-value"
                        data-endpoint="GETapi-downloadPdf--id-" value="Bearer E6ckbe63V81g5PhDZd4avfa"
                        data-component="header">
                    <br>
                    <p>Example: <code>Bearer E6ckbe63V81g5PhDZd4avfa</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-downloadPdf--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-downloadPdf--id-" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="id"
                        data-endpoint="GETapi-downloadPdf--id-" value="sed" data-component="url">
                    <br>
                    <p>The ID of the downloadPdf. Example: <code>sed</code></p>
                </div>
            </form>

            <h2 id="endpoints-GETapi-public-movie-list">GET api/public/movie/list</h2>

            <span id="example-requests-GETapi-public-movie-list">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/public/movie/list" \
    --header "Authorization: Bearer kf61ebE3458gadVh6caDvZP" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/public/movie/list"
);

const headers = {
    "Authorization": "Bearer kf61ebE3458gadVh6caDvZP",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-GETapi-public-movie-list">
                <blockquote>
                    <p>Example response (200):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;meta&quot;: {
        &quot;status&quot;: true,
        &quot;message&quot;: &quot;Public Movie List Fetch&quot;
    },
    &quot;body&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 200,
                &quot;title&quot;: &quot;harum ut assumenda sit consequuntur&quot;,
                &quot;summary&quot;: &quot;Id molestiae consequatur voluptatem quibusdam temporibus ratione itaque iste saepe error a beatae accusantium veritatis sapiente eum porro voluptatem similique nemo blanditiis et et quia perspiciatis enim pariatur deserunt ut placeat quaerat officia molestias deleniti ex sint voluptatem est omnis provident eligendi molestiae tempora quasi laudantium quidem delectus magni recusandae asperiores modi nemo repellendus ea vel magnam eaque voluptate veritatis voluptates est autem.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 199,
                &quot;title&quot;: &quot;minus dignissimos eius autem odit&quot;,
                &quot;summary&quot;: &quot;Molestias sit atque qui est et suscipit consequatur optio reiciendis quaerat ipsa sit nam unde mollitia est eius voluptas temporibus eos et quibusdam tenetur ut nihil quis sit dolores aut minus vero sed eius voluptas dolores iste accusamus et reprehenderit atque dolor repellendus hic iure fugiat quia doloribus alias sed quisquam voluptatem pariatur totam quisquam autem libero et pariatur omnis consequatur debitis adipisci.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 198,
                &quot;title&quot;: &quot;quibusdam harum aut id aut&quot;,
                &quot;summary&quot;: &quot;Totam et enim ut doloribus et hic ullam autem enim iure ipsa ducimus omnis magni et iusto minima veritatis quas nemo minima blanditiis ea earum iure dolorum cumque laboriosam explicabo facilis nemo quia culpa vel rem doloremque sapiente inventore deleniti ea dolores.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 197,
                &quot;title&quot;: &quot;eius nobis occaecati sed itaque&quot;,
                &quot;summary&quot;: &quot;Eos possimus maxime autem cum non sit non dicta quo quia doloremque natus est voluptatem corporis et qui id et tenetur voluptates quia animi animi rerum quia voluptatem assumenda fuga eos assumenda.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 196,
                &quot;title&quot;: &quot;autem qui voluptate delectus nihil&quot;,
                &quot;summary&quot;: &quot;Delectus facilis odio doloremque enim quia magni amet dolores omnis ut sed dolore delectus sed natus quia iste eligendi neque et sit consequuntur quo accusantium eveniet eos vero molestiae numquam animi ex.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 195,
                &quot;title&quot;: &quot;culpa ut exercitationem porro non&quot;,
                &quot;summary&quot;: &quot;Qui est qui rerum doloremque officia error rem odit voluptatem fugit excepturi nulla eaque unde iusto omnis ipsam voluptas dolor et perferendis ut fugit ipsa et autem ut doloribus maxime labore aperiam rem reprehenderit et qui velit quidem rerum sit itaque consequatur quaerat ipsa aut praesentium consequatur aut placeat itaque est doloribus rerum eos repudiandae omnis esse saepe ad et ipsum eaque sit.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 194,
                &quot;title&quot;: &quot;est quos cum quia ea&quot;,
                &quot;summary&quot;: &quot;Mollitia aperiam et nobis doloribus ad eius rerum eius sunt incidunt et iusto magnam iusto et culpa vitae architecto aut similique quisquam amet tenetur ab nostrum id non reprehenderit.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 193,
                &quot;title&quot;: &quot;nihil repudiandae quisquam est consequatur&quot;,
                &quot;summary&quot;: &quot;Iusto praesentium ad sed magnam sit quis pariatur eaque qui vitae blanditiis unde ullam est consequatur perferendis sit dignissimos quaerat eum accusantium nesciunt quisquam unde sint esse corrupti a quis quibusdam assumenda et et commodi sequi consequatur quod vel illum voluptas est et laudantium non id rem quo blanditiis.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 192,
                &quot;title&quot;: &quot;non sit perspiciatis eos doloremque&quot;,
                &quot;summary&quot;: &quot;Deleniti odit magnam maiores hic exercitationem aut quia harum qui voluptatem necessitatibus maxime ut at ut cumque enim hic voluptates similique molestiae voluptas earum qui iusto nisi asperiores quae iste possimus suscipit expedita provident qui voluptas qui deleniti quia corporis cumque voluptas delectus doloremque saepe sit.&quot;,
                &quot;comment&quot;: []
            },
            {
                &quot;id&quot;: 191,
                &quot;title&quot;: &quot;eos et ut architecto ullam&quot;,
                &quot;summary&quot;: &quot;Tempore dolorum quis modi sit vel doloribus et nihil est nisi non nobis explicabo illum eos eius quibusdam eum qui perferendis enim beatae quam ratione aliquid aperiam quibusdam quia aut eum dolores assumenda quia ab exercitationem dolorum.&quot;,
                &quot;comment&quot;: []
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 20,
        &quot;last_page_url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=20&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=19&quot;,
                &quot;label&quot;: &quot;19&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=20&quot;,
                &quot;label&quot;: &quot;20&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost:8000/api/public/movie/list?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost:8000/api/public/movie/list&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 199
    }
}</code>
 </pre>
            </span>
            <span id="execution-results-GETapi-public-movie-list" hidden>
                <blockquote>Received response<span id="execution-response-status-GETapi-public-movie-list"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-GETapi-public-movie-list"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-GETapi-public-movie-list" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-GETapi-public-movie-list">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-GETapi-public-movie-list" data-method="GET" data-path="api/public/movie/list"
                data-authed="1" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('GETapi-public-movie-list', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-GETapi-public-movie-list" onclick="tryItOut('GETapi-public-movie-list');">Try
                        it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-GETapi-public-movie-list"
                        onclick="cancelTryOut('GETapi-public-movie-list');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-GETapi-public-movie-list" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-green">GET</small>
                    <b><code>api/public/movie/list</code></b>
                </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="GETapi-public-movie-list" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="GETapi-public-movie-list" value="application/json" data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
            </form>

            <h2 id="endpoints-POSTapi-public-movie-comment">Store a newly created resource in storage.</h2>



            <span id="example-requests-POSTapi-public-movie-comment">
                <blockquote>Example request:</blockquote>


                <div class="bash-example">
                    <pre><code class="language-bash">curl --request POST \
    "http://127.0.0.1:8000/api/public/movie/comment" \
    --header "Authorization: Bearer agbvZ6fkE14ea53P6D8cdhV" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"movie_id\": \"ipsa\",
    \"email\": \"consequatur\",
    \"comment\": \"voluptas\"
}"
</code></pre>
                </div>


                <div class="javascript-example">
                    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/public/movie/comment"
);

const headers = {
    "Authorization": "Bearer agbvZ6fkE14ea53P6D8cdhV",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "movie_id": "ipsa",
    "email": "consequatur",
    "comment": "voluptas"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
                </div>

            </span>

            <span id="example-responses-POSTapi-public-movie-comment">
                <blockquote>
                    <p>Example response (404):</p>
                </blockquote>
                <details class="annotation">
                    <summary style="cursor: pointer;">
                        <small
                            onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show
                            headers</small>
                    </summary>
                    <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
vary: Origin
 </code></pre>
                </details>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;meta&quot;: {
        &quot;status&quot;: false,
        &quot;message&quot;: &quot;Wrong Movie ID!&quot;
    },
    &quot;body&quot;: &quot;ipsa&quot;
}</code>
 </pre>
            </span>
            <span id="execution-results-POSTapi-public-movie-comment" hidden>
                <blockquote>Received response<span id="execution-response-status-POSTapi-public-movie-comment"></span>:
                </blockquote>
                <pre class="json"><code id="execution-response-content-POSTapi-public-movie-comment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
            </span>
            <span id="execution-error-POSTapi-public-movie-comment" hidden>
                <blockquote>Request failed with error:</blockquote>
                <pre><code id="execution-error-message-POSTapi-public-movie-comment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
            </span>
            <form id="form-POSTapi-public-movie-comment" data-method="POST" data-path="api/public/movie/comment"
                data-authed="1" data-hasfiles="0" data-isarraybody="0" autocomplete="off"
                onsubmit="event.preventDefault(); executeTryOut('POSTapi-public-movie-comment', this);">
                <h3>
                    Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                        style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-tryout-POSTapi-public-movie-comment"
                        onclick="tryItOut('POSTapi-public-movie-comment');">Try it out ⚡
                    </button>
                    <button type="button"
                        style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-canceltryout-POSTapi-public-movie-comment"
                        onclick="cancelTryOut('POSTapi-public-movie-comment');" hidden>Cancel 🛑
                    </button>&nbsp;&nbsp;
                    <button type="submit"
                        style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                        id="btn-executetryout-POSTapi-public-movie-comment" data-initial-text="Send Request 💥"
                        data-loading-text="⏱ Sending..." hidden>Send Request 💥
                    </button>
                </h3>
                <p>
                    <small class="badge badge-black">POST</small>
                    <b><code>api/public/movie/comment</code></b>
                </p>
              
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Content-Type"
                        data-endpoint="POSTapi-public-movie-comment" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <div style="padding-left: 28px; clear: unset;">
                    <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
                    &nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="Accept"
                        data-endpoint="POSTapi-public-movie-comment" value="application/json"
                        data-component="header">
                    <br>
                    <p>Example: <code>application/json</code></p>
                </div>
                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>movie_id</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="movie_id"
                        data-endpoint="POSTapi-public-movie-comment" value="ipsa" data-component="body">
                    <br>
                    <p>Example: <code>ipsa</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="email"
                        data-endpoint="POSTapi-public-movie-comment" value="consequatur" data-component="body">
                    <br>
                    <p>Example: <code>consequatur</code></p>
                </div>
                <div style=" padding-left: 28px;  clear: unset;">
                    <b style="line-height: 2;"><code>comment</code></b>&nbsp;&nbsp;
                    <small>string</small>&nbsp;
                    &nbsp;
                    <input type="text" style="display: none" name="comment"
                        data-endpoint="POSTapi-public-movie-comment" value="voluptas" data-component="body">
                    <br>
                    <p>Example: <code>voluptas</code></p>
                </div>
            </form>




        </div>
        <div class="dark-box">
            <div class="lang-selector">
                <button type="button" class="lang-button" data-language-name="bash">bash</button>
                <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
            </div>
        </div>
    </div>
</body>

</html>
