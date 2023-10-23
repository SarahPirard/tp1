SELECT DISTINCT ?name
WHERE {



     ?person wd: Q11707
    ?person wd: Q31
    ?person wd:Q181138
}
 SERVICE wikibase:label { bd:serviceParam wikibase:language "en" . }

 ORDER BY ?personLabel

 sparql.setQuery(statement)
sparql.setReturnFormat(JSON)
results = sparql.query().convert()

rows = results['results']['bindings']
print(f"\n{len(rows)} Belgian vegan restaurants\n")
print(rows[:10])
