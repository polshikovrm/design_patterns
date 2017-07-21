<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>О проекте | Project About</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php include_once('menu.php'); ?>
    <div class="container">
        <h1 class="text-center page-header">О проекте / Project About</h1>
        <div class="container">
          <p>Проект создан на основе <a href="https://ru.wikipedia.org/wiki/%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" target="_blank"> паттернов проектирования</a>, описанных в легендарной книге "Design Patterns: Elements of Reusable Object-Oriented Software" прозванной "Бандой четырёх" (англ. Gang of Four, сокращённо GoF) за авторством Эриха Гамма, Ричард Хелма, Ральфа Джонсона и Джона Влиссидеса.</p>
          <p>
            Целью проекта является наглядная демонстрация шаблонов проектирования с примерами кода.
          </p>
          <p>Каждый паттерн вынесен в отдельный файл с примером и описанием. Все паттерны можно найти в директории
<code> /source/patterns</code>
<h3>Соответствие паттернов и файлов</h3>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Шаблон Проектирования</th>
                  <th>Design Pattern </th>
                  <th>Описание</th>
                  <th>Source File</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/patterns/abstract_factory.php">Абстрактная фабрика</a></td>
                  <td><a href="/patterns/abstract_factory.php">Abstract factory</a></td>
                  <td>Класс, который представляет собой интерфейс для создания компонентов системы.</td>
                  <td><a href="#"><code>abstract_factory.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/builder.php">Строитель</a></td>
                  <td><a href="/patterns/builder.php">Builder</a></td>
                  <td>Класс, который представляет собой интерфейс для создания сложного объекта.</td>
                  <td><a href="#"><code>builder.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/factory.php">Фабрика</a></td>
                  <td><a href="/patterns/factory.php">Factory</a></td>
                  <td>Определяет интерфейс для создания объекта, но оставляет подклассам решение о том, какой класс инстанцировать.</td>
                  <td><a href="#"><code>factory.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/lazy.php">Ленивая инициализация</a></td>
                  <td><a href="/patterns/lazy.php">Lazy initialization</a></td>
                  <td>Объект, инициализируемый во время первого обращения к нему.	</td>
                  <td><a href="#"><code>lazy.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/object_pool.php">Объектный пул</a></td>
                  <td><a href="/patterns/object_pool.php">Object pool</a></td>
                  <td>	Класс, который представляет собой интерфейс для работы с набором инициализированных и готовых к использованию объектов.</td>
                  <td><a href="#"><code>object_pool.php</code></a></td>
                </tr>
                  <td><a href="/patterns/prototype.php">Прототип</a></td>
                  <td><a href="/patterns/prototype.php">Prototype</a></td>
                  <td>Определяет интерфейс создания объекта через клонирование другого объекта вместо создания через конструктор.</td>
                  <td><a href="#"><code>prototype.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/singleton.php">Одиночка</a></td>
                  <td><a href="/patterns/singleton.php">Singleton</a></td>
                  <td>Класс, который может иметь только один экземпляр.</td>
                  <td><a href="#"><code>singleton.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/multiton.php">Пул одиночек</a></td>
                  <td><a href="/patterns/multiton.php">Multiton</a></td>
                  <td>Гарантирует, что класс имеет поименованные экземпляры объекта и обеспечивает глобальную точку доступа к ним.</td>
                  <td><a href="#"><code>multiton.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/adapter.php">Адаптер</a></td>
                  <td><a href="./patterns/adapter.php">Adapter</a></td>
                  <td>Объект, обеспечивающий взаимодействие двух других объектов, один из которых использует, а другой предоставляет несовместимый с первым интерфейс.</td>
                  <td><a href="#"><code>adapter.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/bridge.php">Мост</a></td>
                  <td><a href="/patterns/bridge.php">Bridge</a></td>
                  <td>Структура, позволяющая изменять интерфейс обращения и интерфейс реализации класса независимо.</td>
                  <td><a href="#"><code>bridge.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/composite.php">Компоновщик</a></td>
                  <td><a href="/patterns/composite.php">Composite</a></td>
                  <td>Объект, который объединяет в себе объекты, подобные ему самому.</td>
                  <td><a href="#"><code>composite.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/decorator.php">Декоратор</a></td>
                  <td><a href="/patterns/decorator.php">Decorator</a></td>
                  <td>	Класс, расширяющий функциональность другого класса без использования наследования.</td>
                  <td><a href="#"><code>decorator.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/facade.php">Фасад</a></td>
                  <td><a href="/patterns/facade.php">Facade</a></td>
                  <td>Объект, который абстрагирует работу с несколькими классами, объединяя их в единое целое.</td>
                  <td><a href="#"><code>facade.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/facade.php">Приспособленец</a></td>
                  <td><a href="/patterns/facade.php">Flyweight</a></td>
                  <td>Это объект, представляющий себя как уникальный экземпляр в разных местах программы, но по факту не являющийся таковым.</td>
                  <td><a href="#"><code>flyweight.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/proxy.php">Заместитель</a></td>
                  <td><a href="/patterns/proxy.php">Proxy</a></td>
                  <td>Объект, который является посредником между двумя другими объектами, и который реализует/ограничивает доступ к объекту, к которому обращаются через него.</td>
                  <td><a href="#"><code>proxy.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/chain.php">Цепочка ответственности</a></td>
                  <td><a href="/patterns/chain.php">Chain of responsibilily</a></td>
                  <td>Предназначен для организации в системе уровней ответственности.</td>
                  <td><a href="#"><code>chain.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/command.php">Команда</a></td>
                  <td><a href="/patterns/command.php">Command</a></td>
                  <td>Представляет действие. Объект команды заключает в себе само действие и его параметры.</td>
                  <td><a href="#"><code>command.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/interpreter.php">Интерпретатор</a></td>
                  <td><a href="/patterns/interpreter.php">Interpreter</a></td>
                  <td>Решает часто встречающуюся, но подверженную изменениям, задачу.</td>
                  <td><a href="#"><code>interpreter.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/iterator.php">Итератор</a></td>
                  <td><a href="/patterns/iterator.php">Iterator</a></td>
                  <td>Представляет собой объект, позволяющий получить последовательный доступ к элементам объекта-агрегата без использования описаний каждого из объектов, входящих в состав агрегации.</td>
                  <td><a href="#"><code>iterator.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/mediator.php">Посредник</a></td>
                  <td><a href="/patterns/mediator.php">Mediator</a></td>
                  <td>Обеспечивает взаимодействие множества объектов, формируя при этом слабую связанность и избавляя объекты от необходимости явно ссылаться друг на друга.</td>
                  <td><a href="#"><code>mediator.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/memento.php">Хранитель</a></td>
                  <td><a href="/patterns/memento.php">Memento</a></td>
                  <td>Позволяет не нарушая инкапсуляцию зафиксировать и сохранить внутренние состояния объекта так, чтобы позднее восстановить его в этих состояниях.</td>
                  <td><a href="#"><code>memento.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/null.php">Нулевой объект</a></td>
                  <td><a href="/patterns/null.php">Null Object</a></td>
                  <td>Предотвращает нулевые указатели, предоставляя объект «по умолчанию».</td>
                  <td><a href="#"><code>null.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/observer.php">Наблюдатель</a></td>
                  <td><a href="/patterns/observer.php">Observer</a></td>
                  <td>Определяет зависимость типа «один ко многим» между объектами таким образом, что при изменении состояния одного объекта все зависящие от него оповещаются об этом событии.	</td>
                  <td><a href="#"><code>observer.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/servant.php">Слуга</a></td>
                  <td><a href="/patterns/servant.php">Servant</a></td>
                  <td>Используется для обеспечения общей функциональности группе классов.	</td>
                  <td><a href="#"><code>servant.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/specification.php">Спецификация</a></td>
                  <td><a href="/patterns/specification.php">Specification</a></td>
                  <td>Служит для связывания бизнес-логики.</td>
                  <td><a href="#"><code>specification.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/state.php">Состояние</a></td>
                  <td><a href="/patterns/state.php">State</a></td>
                  <td>Используется в тех случаях, когда во время выполнения программы объект должен менять своё поведение в зависимости от своего состояния.</td>
                  <td><a href="#"><code>state.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/strategy.php">Стратегия</a></td>
                  <td><a href="/patterns/strategy.php">Strategy</a></td>
                  <td>Предназначен для определения семейства алгоритмов, инкапсуляции каждого из них и обеспечения их взаимозаменяемости.	</td>
                  <td><a href="#"><code>strategy.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/template.php">Шаблонный метод</a></td>
                  <td><a href="/patterns/template.php">Template method</a></td>
                  <td>Определяет основу алгоритма и позволяет наследникам переопределять некоторые шаги алгоритма, не изменяя его структуру в целом.	</td>
                  <td><a href="#"><code>template.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/visitor.php">Посетитель</a></td>
                  <td><a href="/patterns/visitor.php">Visitor</a></td>
                  <td>Описывает операцию, которая выполняется над объектами других классов. При изменении класса Visitor нет необходимости изменять обслуживаемые классы.	</td>
                  <td><a href="#"><code>visitor.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/simple_policy.php">Простая политика</a></td>
                  <td><a href="/patterns/simple_policy.php">Simple Policy</a></td>
                  <td> - </td>
                  <td><a href="#"><code>simple_policy.php</code></a></td>
                </tr>
                <!-- <tr>
                  <td><a href="/patterns/event_listener.php">Слушатель событий</a></td>
                  <td><a href="/patterns/event_listener.php">Event listener</a></td>
                  <td> - </td>
                  <td><a href="#"><code>event_listener.php</code></a></td>
                </tr> -->
                <tr>
                  <td><a href="/patterns/single_serving.php">Одноразовый посетитель</a></td>
                  <td><a href="/patterns/single_serving.php">Single-serving visitor</a></td>
                  <td>Оптимизирует реализацию шаблона посетитель, который инициализируется, единожды используется, и затем удаляется.</td>
                  <td><a href="#"><code>single_serving.php</code></a></td>
                </tr>
                <tr>
                  <td><a href="/patterns/hierarchical_visitor.php">Иерархический посетитель</a></td>
                  <td><a href="/patterns/hierarchical_visitor.php">Hierarchical visitor</a></td>
                  <td>Предоставляет способ обхода всех вершин иерархической структуры данных, например древовидной структуры.</td>
                  <td><a href="#"><code>hierarchical_visitor.php</code></a></td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
  </body>
</html>
