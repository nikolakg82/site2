{extends file="structure/center_cel.tpl"}
{block name=data}
    <h1>Login</h1>
    <form method="post" action="/user/login.html">
        <div>Email</div>
        <div>
            <input type="email" name="email" />
        </div>
        <div>Password</div>
        <div>
            <input type="password" name="password" />
        </div>
        <div>
            <input type="submit" value="Login" />
        </div>
    </form>
{/block}