<ul class="media-list">
@foreach ($microposts as $micropost)

    <?php $user = $micropost->user; ?>

テスト

@endforeach
</ul>
{!! $microposts->render() !!}