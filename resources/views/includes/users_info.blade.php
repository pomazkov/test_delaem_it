
<section data-wow-delay="0.5s" id="first_block__mp" class="first_block__mp wow slideInBottomMy">
    <div class="inner">
        <h2 class="h2_title__site">Информация о письмах и пользователях</h2>
        <table border="1">
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>E-mail</th>
                <th>Сообщение</th>
                <th>День рождения</th>
            </tr>
            @foreach($usersInfo as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->message }}</td>
                <td>{{ $user->birth }}</td>
                <td><a href="#" class="catalog_btn__bot"><div class="text__btn">Изменить</div><div class="img__btn"></div></a></td>
                <td><a href="#" class="catalog_btn__bot"><div class="text__btn">Удалить</div><div class="img__btn"></div></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
