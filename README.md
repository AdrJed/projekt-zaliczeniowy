
---- Projekt zaliczeniowy - kurs PHP --------------------------

Adrian Jędrzejak - I r. IS WFAIiS UMK

---- Tematyka -------------------------------------------------   
    
    Strona o sobie, swojej aktywności, projektach itp. 
Główne składowe to system prostego bloga i lista moich ukończonych lub 
będacych w trakcie rozwoju najróżniejszych prac którymi chcę podzielić się
ze światem.
    Inna funkcjonalnością będzie system dostępu do plików dla użytkowników,
którym chcę bezpiecznie przez swój serwer udostępnić ważne dane.
Użytkownik powinien potwierdzić dostęp do określonej listy plików 
kluczem (tokenem).

---- Szablon strony -------------------------------------------

- STRONA GŁÓWNA
    - nagłówek z prostym menu i podstawowymi informacjami czy linkami, - OK
    - kilka słów o sobie,
    - grafiki z głównymi kategoriami menu (blog, prace, pliki),
    - lista ostatnich aktywności (wpis na blogu, dodana praca, itp.)
- PRACE
    - widok wyboru kategorii (grafika, program, strona internetowa itp.) - OK
    - widok listy elementów dla danej kategorii
        - tytuł, - OK
        - krótki opis, - OK
        - data dodania, edycji, - TODO
        - grafika/logo/miniatura, - TODO
        - link do szczegółów, - TODO
    - widok szczegółów wybranego elementu
        - tytuł,
        - długi opis,
        - kilka przykładowych grafik,
- BLOG
    - widok listy wpisów - OK
        - tytuł, - OK
        - krótki opis/wstępna treść, - OK
        - data dodania,edycji - OK 
        - link przejścia do wpisu - OK
    - widok wybranego wpisu - OK
        - tytuł, - OK 
        - pełna treść, - OK
        - data dodania, edycji - OK
- UDOSTĘPNIANIE PLIKÓW
    - widok główny
        - pole identyfikatora dostępu dla konkretnej grupy plików,
        - przejście do plików ogólnodostępnych
    - widok listy plików
        - nazwa pliku,
        - rozmiar,
        - typ pliku,
        - przycisk pobierania pliku

