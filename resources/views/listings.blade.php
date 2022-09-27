<h1><?php echo $heading; ?></h1>

<?php foreach ($listings as $listing): ?>
    <h2><a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?>