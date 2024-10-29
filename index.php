<?php
class Cookie
{
    private string $type = '';

    public function setType(string $type): void
    {
        $allowedTypes = ['Шоколадное', 'Ванильное', 'Кокосовое'];

        if (!in_array($type, $allowedTypes)) {
            throw new InvalidArgumentException("Такого нема: '$type'. Вот это вкусняшка😋: " . implode(', ', $allowedTypes));
        }

        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}

$cookie = new Cookie();

try {
    $cookie->setType('Клубничное');
} catch (InvalidArgumentException $e) {
    echo "Ты шо совсем: " . $e->getMessage() . "\n";
}
?>
<br>
<?
$cookie->setType('Шоколадное');
echo "Тип печенья: " . $cookie->getType() . "\n";