start cmd /k "java -jar selenium-server-standalone-2.46.0.jar -role hub "
start cmd /k "java -jar selenium-server-standalone-2.46.0.jar -role node -hub http://127.0.0.1:4444 -port 5555"
exit