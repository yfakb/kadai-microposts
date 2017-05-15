<ul class="media-list">
@foreach ($microposts as $micropost)

    <?php $user = $micropost->user; ?>


    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>

    </li>
@endforeach
</ul>
{!! $microposts->render() !!}