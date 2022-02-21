<section class="container">
    <h1>create Pokemon</h1>
    <form action="/store" method="POST">
        @csrf
        <label for="">Name:</label><br>
        <input name="name" type="text"><br>

        <label for="">type:</label><br>
        <input name="type" type="text"><br>

        <label for="">Niveau:</label><br>
        <input name="level" type="number"><br>

        <button type="submit">Send</button>
    </form>
</section>