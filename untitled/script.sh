source ~/.bashrc

echo "Введите ваш возраст: "
read year
echo "Привет $NAME, ваш возраст $year? (y/n)"
read answer
if [ $answer == 'y']
then
  echo 'отлично'
  fi
  if [ $answer == 'n']
  then
    echo 'Извините'
    fi