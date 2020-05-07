<?php

    class DbService {

        private static $databaseInstance = null;

        public static function GetDatabaseInstance() {
            $result = false;
            if (is_null(self::$databaseInstance)) {
                self::$databaseInstance = new mysqli(HOST, USER, PASSWORD, NAME);
                if (self::$databaseInstance) {
                    $result = self::$databaseInstance;
                }
            }
            else {
                $result = self::$databaseInstance;
            }
            return $result;
        }

        public static function CloseConnection() {
            self::$databaseInstance->close();
        }

        public static function ExecuteQuery($query) {
            $result = self::$databaseInstance->query($query);
            return self::GetRows($result);
        }

        private static function GetRows($queryResult) {
            if (is_bool($queryResult)) {
                return $queryResult;
            }

            $result = array();
            $i = 0;
            while ($row = $queryResult->fetch_assoc()) {
                $result[$i] = $row;
                $i++;
            }

            return $result;
        }

        public static function EscapesString($str) {
            return self::$databaseInstance->escape_string($str);
        }
    }

?>