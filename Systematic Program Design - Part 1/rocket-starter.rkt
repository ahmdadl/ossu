;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname rocket-starter) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #f)))
;; Data definetions

;; RocketState is one of:
;; - "stoped"
;; - "initated"
;; - "flying"
;; - "landing"
;; interp. rocket state

(check-expect (next "landing") "stoped")

#;
(define (next s)
  (...)
)

(define (next s)
  (cond
      [(string=? s "stoped") "initated"]
      [(string=? s "initated") "flying"]
      [(string=? s "landing") "stoped"]
      [else "landing"]
   )
)