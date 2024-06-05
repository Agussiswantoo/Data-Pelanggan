<style>
    .container {
        max-width: 400px; /* Sesuaikan lebar maksimum container dengan kebutuhan Anda */
        margin: 0 auto; /* Menengahkan container secara horizontal */
        padding: 20px; /* Menambahkan padding agar konten tidak terlalu dekat dengan tepi container */
        text-align: center; /* Menengahkan teks secara horizontal di dalam container */
    }

    .login-form {
        background-color: #ffae00;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left; /* Mengembalikan teks dalam formulir ke posisi kiri */
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-btn {
        background-color: #000000;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<div class="container">
    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <button type="submit" class="login-btn">Masuk</button>
    </form>
</div>