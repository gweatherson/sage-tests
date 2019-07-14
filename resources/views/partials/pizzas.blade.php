<div class="pizzas__item">
  <img src="{!! $image !!}" alt="{!! $name !!}" class="pizzas__item-image" />
  <h3>{!! $name !!}</h3>
  @if ($vegetarian == 1)
      This item is vegetarian.
  @else
      This item has meat.
  @endif


</div>
