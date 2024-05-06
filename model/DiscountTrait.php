<?php
trait DiscountTrait {
  public function calculateDiscountedPrice($price, $discountPercentage) {
      // Calcola il prezzo scontato
      $discountedPrice = $price - ($price * ($discountPercentage / 100));
      return $discountedPrice;
  }
}

