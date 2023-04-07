# Функция суммы всех простых чисел, не превышающих число X
def sum_of_prime_numbers(x: int):

    # Функция проверки числа на простоту =)
    def is_prime(x):
        for i in range(2, x):
            if (x % i) == 0:
                return False
        return True

    result = 0

    if x > 1:
        # Проверка, если число простое - то оно плюсуется к результату
        if is_prime(x):
            result += x
        # Возвращается, рекурсивный результат
        return result + sum_of_prime_numbers(x - 1)
    else:
        # Если Х не больше 1, то нет простых чисел и возвращается 0
        return 0


# Проверка работы функции
assert sum_of_prime_numbers(5) == 10  # Ok
assert sum_of_prime_numbers(10) == 17  # Ok
assert sum_of_prime_numbers(20) == 77  # Ok

print('Если в консоли нет красных слов, значит всё ок =)')
